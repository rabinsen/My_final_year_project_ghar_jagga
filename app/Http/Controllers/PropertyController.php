<?php

namespace App\Http\Controllers;

use App\Group;
use App\Map;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use App\Property;

use Carbon\Carbon;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\Session;
use Image;


use App\ImageProperty;
use App\Review;

use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreateReplyRequest;

class PropertyController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth',['only' => 'create']);
//    }





//    public function uploadCategory(){
//        //$groups = Group::latest();
//        $groups = [];
//        foreach(Group::all() as $group){
//            $groups[$group->id] = $group->name;
//        }
//        return view('createCategory', compact('groups'));
//    }

//    public function storeCategory(Request $request)
//    {
//        $category = new Group();
//        $category->name = $request->category;
//        $category->save();
////        Group::create($request->all());
//        return redirect()->route('create', $category->id);
//    }

    public function upload()
    {
        $groups = [];
        foreach(Group::all() as $group){
            $groups[$group->id] = $group->name;
        }
        return view('create', compact('groups'));
    }

    public function store(Request $request)
    {
        $property = new Property();
        $picture = new ImageProperty();
        $map = new Map();
        $user = Auth::user();
//        $category = Group::findOrFail($request['c_id']);

        $property->user_id = $user->id;
        $property->group_id = $request->group_id;


//        $this->validate($request, [
//            //'category' => 'required',
//            'title' => 'required',
//            'price' => 'required',
//            //'type' => 'required',
////            'status' => 'required',
////            'readyToMove' => 'required',
////            'address' => 'required',
////            'city' => 'required',
////            'country' => 'required',
////            'mapLocation' => 'required',
////            'landArea' => 'required',
////            'houseArea' => 'required',
////            'plotted' => '',
////            'storey' => 'required',
////            'bedroom' => 'required',
////            'bathroom' => 'required',
////
////            'kitchen' => 'required',
////            'roadDistance' => '',
////            'description' => '',
//            'image' => 'required'
//        ]);
//        $category->name= $request->category;

        $map->address = $request->address;
        $map->lat = $request->lat;
        $map->lng = $request->lng;

        $property->title = $request->title;
        $property->price = $request->price;
        $property->type = $request->type;
        $property->status = $request->status;
        $property->readyToMove = $request->readyToMove;
//        $property->address = $request->address;
        $property->city = $request->city;
        $property->country = $request->country;
        $property->mapLocation = $request->mapLocation;
        $property->landArea = $request->landArea;
        $property->houseArea = $request->houseArea;
        $property->plotted = $request->plotted;
        $property->storey = $request->storey;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->kitchen = $request->kitchen;
        $property->roadDistance = $request->roadDistance;
        $property->description = $request->description;
//


        //return redirect()->route('showProperties')->with(['success' => 'Image Uploaded Successfully']);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(370, 220)->save(public_path('/images/' . $filename));

            //$user = Auth::user();
            $picture->thumbnail = $filename;
            // $user->save();

        }
//        $property->images()->save($picture);

        if ($request->hasFile('slide1')) {
            $image1 = $request->file('slide1');
            $filename1 = time()+1 . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(370, 220)->save(public_path('/images/' . $filename1));

            //$user = Auth::user();
            $picture->slide1 = $filename1;
            // $user->save();
        }

//        Auth::user()->properties()->save($property);
       $property->save();
        $property->images()->save($picture);
        $property->map()->save($map);

        return redirect()->route('properties.index');


    }

    public function index(Request $request){

        $properties = Property::where(function($query)  use ($request){
            if ( ($group_id = $request->get("group_id"))){
                $query->where("group_id", $group_id);
            }

            if (($term = $request->get('term'))){
                $query->orWhere('title', 'like', '%' . $term . '%');
//                $query->orWhere('address', 'like', '%' . $term . '%');
                $query->orWhere('city', 'like', '%' . $term . '%');
            }
        })
            ->orderBy("id", "desc")
            ->paginate(6);

//
        return view('properties', [
            'properties' => $properties
        ]);
    }

    public function detail($id){
        $details = Property::findOrFail($id);
        $maps = Map::findOrFail($id);
        $tProperties = Property::orderBy('hit', 'desc');
        $avgReview = Review::where('property_id', $id)->avg('rating');

        $details->hit++;
        $details->save();

        return view('propertyDetails', ['details' => $details,
            'maps' => $maps,
            'tProperties' => $tProperties,
            'avgReview' => $avgReview

        ]);
    }

    public function showLatest(){
        $latestProperties = Property::latest()->paginate(4);
        $property = Property::orderBy('hit', 'desc')->paginate(4);

        return view('welcome', compact('latestProperties', 'property'));
    }

    public function userReview(Request $request){

        $this->validate($request, [
            'body' => 'required|max:1000',
            'rating' => 'required'
        ]);

        $property = Property::findOrFail($request['p_id']);
        if( $property ){
            $review = new Review();
            $user = Auth::user();
            $review->rating = $request->rating;
            $review->comments = $request->body;
            $review->user_id = $user->id;
            $review->property_id = $property->id;

            $review->save();

            return redirect()->back();
        }

        return redirect('/');
    }



    public function autocomplete(Request $request){

        //prevent this method called by non ajax
        if ($request->ajax())
        {
            $properties = Property::where(function($query)  use ($request){

                //Filer by keyword entered
                if (($term = $request->get('term'))){
                    $query->orWhere('title', 'like', '%' . $term . '%');
                    $query->orWhere('address', 'like', '%' . $term . '%');
                    $query->orWhere('city', 'like', '%' . $term . '%');


                }
            })
                ->orderBy("id", "desc")
                ->take(5)
                ->get();

            //Convert to json
            $results = [];
            foreach ($properties as $property){
                $results[] = ['id' => $property->id, 'value' => $property->title];
            }
            return response()->json($results);
        }
    }

    public function edit($id){
        $details = Property::find($id);
        return view ('dashboard.edit', compact('details'));
    }

    public function updates(Request $request, $id)
    {
        //validate input data
//        $this->validate($request, [
//            //'category' => 'required',
//            'title' => 'required',
//            'price' => 'required',
//            //'type' => 'required',
////            'status' => 'required',
////            'readyToMove' => 'required',
////            'address' => 'required',
////            'city' => 'required',
////            'country' => 'required',
////            'mapLocation' => 'required',
////            'landArea' => 'required',
////            'houseArea' => 'required',
////            'plotted' => '',
////            'storey' => 'required',
////            'bedroom' => 'required',
////            'bathroom' => 'required',
////
////            'kitchen' => 'required',
////            'roadDistance' => '',
////            'description' => '',
//            'image' => 'required'
//

        $property = Property::find($id);
        $property->title = $request->input('title');
        $property->description = $request->input('description');
        $property->price = $request->input('price');
        $property->bedroom = $request->input('bedroom');
        $property->bathroom = $request->input('bathroom');
        $property->kitchen = $request->input('kitchen');
        $property->landArea = $request->input('landArea');
        $property->houseArea = $request->input('houseArea');
        $property->plotted = $request->input('plotted');
        $property->storey = $request->input('storey');
        $property->roadDistance = $request->input('roadDistance');
        $property->save();

        Session::flash('success', 'This post was successfully saved.');

        return redirect()->route('details', $property->id);

    }

    public function delete($id){
        $property = Property::find($id);
        $property->delete();

        Session::flash('success', 'The property was successfully Deleted');
        return redirect()->back();

    }

//    public function sorting(){
//        $tProperties = Property::orderBy('hit', 'desc');
//        return view('propertyDetails', [ 'tProperties' => $tProperties]);
//    }

    public function filter(){
        $properties = Property::where(function($query){
            $min_price = Input::has('min_price') ?  Input::get('min_price') : null;
            $max_price = Input::has('max_price') ? Input::get('max_price') : $max_price = null;
            // $brands = Input::has('brands') ? Input::get('brands') : [];

            if(isset($min_price) && isset($max_price)){
                $query-> where('price','>=',$min_price)
                    -> where('price','<=',$max_price);
            }

        })->orderBy("id", "asc")
            ->paginate(6);

        return view ('properties', compact('properties'));
    }
}
