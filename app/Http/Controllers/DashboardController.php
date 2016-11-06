<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Property;
use App\User;
use App\Http\Requests;

class
DashboardController extends Controller
{

    public function dashboard()
    {
        $user = Auth::user();
        if (Auth::user()) {
            $user->view_count++;
            $user->save();
        }
        if ($user->type === 0){
            if ($user->view_count === 1) {
                return view('user.profileInfo', compact('user'));
            }
            }

        return view('dashboard', compact('user'));
    }

    public function myProperties(){


        return view('dashboard.myProperties');

    }
    public function profile(){

        return view('profile', array('user' => Auth::user()) );

    }
    public function myReviews()
    {
        $uProperty = Property::all();
        return view('dashboard.myPropertyReviews', compact('uProperty'));
    }

    public function userDetails(){
        return view ('dashboard.userDetails');
    }

    public function manageProperty(){
        return view('dashboard.manageProperty');
    }
}
