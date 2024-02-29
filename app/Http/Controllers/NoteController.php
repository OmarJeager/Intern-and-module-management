<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Models\Stagaire;
use App\Models\Module;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagaire::with('modules')->get();
        
        return view('Grade.index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $stagiaires = Stagaire::all();
        
        $modules = Module::all();
        return view('grade.create', compact('stagiaires', 'modules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'stagiaire_id' => 'required',
            'module_id' => 'required',
            'grade' => 'required',
        ]);
    
        $grade = new Note();
        $grade->stagiaire_id = $request->stagiaire_id;
        $grade->module_id = $request->module_id;
        $grade->grade = $request->grade;
        $grade->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
