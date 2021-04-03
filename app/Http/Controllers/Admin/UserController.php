<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all(Request $request){
        if($request->get('admin')){
            $users = User::where('email','!=',env('developer'))->whereIsAdmin(true)->paginate(50);
            $title = "All Admins";
        }else{
            $users = User::where('email','!=',env('developer'))->paginate(50);
            $title = "All Users";
        }

        return view('admin.users',compact('users','title'));
    }

}
