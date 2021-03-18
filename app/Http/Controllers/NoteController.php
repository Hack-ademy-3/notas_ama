<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required',
        ]);
        Note::create($validated);
        /* La misma forma sin simplificar */
        /* Note::create([
            'title' => $validated['title'],
            'content' => $validated['content']   
            ]); */
                
        return redirect()->route('home');
            
    }

    public function show($id)   
    {
        $nota = Note::findOrFail($id);
        return view('note',['note'=>$nota]);
    }
}
