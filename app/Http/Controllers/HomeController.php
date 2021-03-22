<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    //recuperar notas del DB
    //$notes = Note::latest()->get();
    //pasar las notas a la vista
    $notes = Note::orderBy('created_at','desc')->get();

    
    return view ('home',['notes'=> $notes]);
    


    }
    
}
