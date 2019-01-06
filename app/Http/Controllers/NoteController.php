<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(){
    	return response()->json(Note::all());
    }

    public function show($id){
    	$note = Note::findOrFail($id);
    	return response()->json($note);
    }
}
