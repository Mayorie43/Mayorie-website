<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function courses(){
        return view('admin.questions.courses');
    }

    public function viewcourse(){
        return view('admin.questions.questions');
    }
}
