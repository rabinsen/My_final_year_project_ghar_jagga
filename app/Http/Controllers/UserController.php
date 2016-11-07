<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Property;
use App\Profile;

use App\ImageProperty;
use Auth;
use Image;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    //
    public function profile(){

        return view('profile', array('user' => Auth::user()) );
    }

    public function updateAvatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

//        return view('profile', array('user' => Auth::user()) );
        return view('dashboard');

    }

    public function profileInfo(){

        return view('user.profileInfo', array('user' => Auth::user()));

    }

    public function upload(Request $request){
//        $profile = new Profile();
        $user = Auth::user();
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );


            $user->avatar = $filename;
            $user->save();
        }

        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->phone1 = $request->phone1;
        $user->phone2 = $request->phone2;
//        $user->user_id = Auth::user()->id;
        $user->save();
        return view('dashboard');
    }

    public function showProfile(){
        $user = Auth::user();
        return view ('user.showProfile', compact('user'));
    }

    public function editProfile($id){
        $user = Auth::user();
        return view ('user.edit', compact('user'));
    }

    public function updateProfile(Request $request, $id){
        $user = User::find($id);

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->phone1 = $request->input('phone1');
        $user->phone2 = $request->input('phone2');

        $user->save();

        Session::flash('success', 'This post was successfully saved.');

        return redirect()->route('showProfile', $user->id);
    }

    public function showAgents(){
       $users = User::all();


            return view ('agents.showAgents', compact('users'));
    }

    public function index(Request $request){
        $users = User::where(function($query)  use ($request){
//            if ( ($group_id = $request->get("group_id"))){
//                $query->where("group_id", $group_id);
//            }

            if (($terms = $request->get('terms'))){
                $query->orWhere('first_name', 'like', '%' . $terms . '%');
                $query->orWhere('last_name', 'like', '%' . $terms . '%');
                $query->orWhere('address', 'like', '%' . $terms . '%');
                $query->orWhere('city', 'like', '%' . $terms . '%');
            }
        })
            ->orderBy("id", "desc")
            ->paginate(6);

//
        return view('agents.showAgents', [
            'users' => $users
        ]);
    }

    public function autocomplete(Request $request){

        //prevent this method called by non ajax
        if ($request->ajax())
        {
            $users = User::where(function($query)  use ($request){

                //Filer by keyword entered
                if (($terms = $request->get('terms'))){
                    $query->orWhere('first_name', 'like', '%' . $terms . '%');
                    $query->orWhere('last_name', 'like', '%' . $terms . '%');
                    $query->orWhere('address', 'like', '%' . $terms . '%');
                    $query->orWhere('city', 'like', '%' . $terms . '%');


                }
            })
                ->orderBy("id", "desc")
                ->take(5)
                ->get();

            //Convert to json
            $results = [];
            foreach ($users as $user){
                $results[] = ['id' => $user->id, 'value' => $user->first_name];
            }
            return response()->json($results);
        }
    }


}
