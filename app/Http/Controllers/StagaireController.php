<?php

namespace App\Http\Controllers;

use App\Models\Stagaire;
use Illuminate\Http\Request;
use App\Models\Filliere;
class StagaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagaire::with('filiere', 'modules')->get();
        return view('Stagaire.index', compact('stagiaires'));
    

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filiere=Filliere::all();
        return view('stagaire.AddStagaire',compact('filiere'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required',
            
        ]);

        $stagaire = new Stagaire();
        $stagaire->filiere_id = $request->filiere;
        $stagaire->name = $request->name;

        
        $stagaire->save();

        return redirect('/')->with('success', 'Filiere created successfully!');
    


    }

    /**
     * Display the specified resource.
     */
    public function show(Stagaire $stagaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagaire $stagaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagaire $stagaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagaire $stagaire)
    {
        //
    }
}
