<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SubscriptionController extends Controller
{
    protected $user;

    public function __construct(){
        $this->user = Auth::user();
    }

    public function getIndex(){

        return view ('subscription.index')->with('user', $this->user);
    }

    public function getJoin(){
        return view ('subscription.join');
    }

    public function postJoin()
    {
        $this->user->newSubscription('main', Input::get('plan'))->create(Input::get('token'), [
            'email' => $this->user->email
        ]);

        return redirect()->route('subscription')->with('notice', 'You are now subscribed');

    }
    public function getCancel(){
        $this->user->subscription('main')->cancel();
        return redirect()->route('subscription')->with('notice', 'Sorry to Cancel');
    }

    public function getResume(){
        $this->user->subscription('main',$this->user->stripe_plan)->resume();
        return redirect()->route('subscription');
    }
}


