<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('phonebook');
    }

    public function name(){
        return redirect('/');
    }
}
