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
        $profile = new Profile();
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        $profile->first_name = $request->first_name;
        $profile->middle_name = $request->middle_name;
        $profile->last_name = $request->last_name;
        $profile->address = $request->address;
        $profile->city = $request->city;
        $profile->country = $request->country;
        $profile->phone1 = $request->phone1;
        $profile->phone2 = $request->phone2;
        $profile->user_id = Auth::user()->id;
        $profile->save();
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
        $profile = Profile::where('user_id', $user->id);

        $profile->first_name = $request->input('first_name');
        $profile->last_name = $request->input('last_name');
        $profile->address = $request->input('address');
        $profile->city = $request->input('city');
        $profile->country = $request->input('country');
        $profile->phone1 = $request->input('phone1');
        $profile->phone2 = $request->input('phone2');

        $profile->save();

        Session::flash('success', 'This post was successfully saved.');

        return redirect()->route('showProfile', $user->id);
    }

    public function showAgents(){
       $users = User::all();


            return view ('agents.showAgents', compact('users'));
    }


}
