<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyModelController extends Controller
{
    public function my_homepage_view() {
        return view('my_view');
        // @ my_project\resources\views\my_view.blade.php
    }
}
