<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    // landing layout page
    public function splash(){
        return view('pages.splash');
    }

    // Index page
    public function index(){
        $dashboard = 'In adi Dashboard';
        /**
         * PASSING VALUES
         * Here any valu or variable can be passed to the pages which is achieved using the With option
         * Syntax ->with($key, $value)
         * NB: name of the variable must act as the key ie if variable is '$jack1' then the key should be 'jack1'
         * 
         * Passing this variable jst use it by use of the echo function or using {{$variableName}}
         */ 
        return view('pages.index')->with('dashboard', $dashboard);
    }


    // studenr registration
    public function student_reg(){
        $regTitle = "Student Registration";
        return view('registration.student_reg')->with('regTitle', $regTitle);
    }

}
