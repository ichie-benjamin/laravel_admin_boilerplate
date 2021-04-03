<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        $articles = [];
        return view('admin.dashboard',compact('articles'));
    }
    public function crudGUI(){
        return view('admin.crud');
    }
}
