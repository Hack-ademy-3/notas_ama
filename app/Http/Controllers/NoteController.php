<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'title' => 'required|max:10',
            'content' => 'required',
        ]);
        dd($validated);
    }
}
