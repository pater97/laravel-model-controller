<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class ControlPage extends Controller
{
    public function index(){        //index si riferisce alla rotta
        $movies =Movie::all();     //creare una variabile nella quale inserire i dati del db
        return view('welcome',compact('movies'));   //creazione della rotta
    }   
}
