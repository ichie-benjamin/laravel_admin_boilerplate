<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        $cars = 1;
        $tickets = 1;
        $users = User::whereRoleIs('user')->get();
        return view('admin.dashboard',compact('users','tickets','cars'));
    }
    public function crudGUI(){
        return view('admin.crud');
    }
}
