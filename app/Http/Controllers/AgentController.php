<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AgentController extends Controller
{
    public function agentSearch(Request $request){

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
}
