<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller{
    public function index(){
        return view('students.index'); //meaning student folder and index.blade.php file.
    }   
}
