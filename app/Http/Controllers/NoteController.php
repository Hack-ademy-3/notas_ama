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
        $note = Note::findOrFail($id);
        return view('note',['note'=>$note]);
    }

    public function update($id, Request $request)
    {
        //Para modificar algo, hay que recuperar lo que quiero modificar
        $note = Note::findOrFail($id);

        //Antes de modificar, recupero los datos con los cuales quiero modificar los datos
        $validateddata = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required',
        ]);

        //Antes de devolver todo, modificamos la nota
            $note->title=$validateddata['title'];
            $note->content=$validateddata['content'];
            $note->save();


        //Luego return redirect
        return redirect()->back();

    }

    public function delete($id)
    {   
        //Recuperamos el dato que queremos borrar
        $note = Note::findOrFail($id);

        //Borramos la nota y salimos
        $note->delete();

        return redirect()->route('home');
    }
}
