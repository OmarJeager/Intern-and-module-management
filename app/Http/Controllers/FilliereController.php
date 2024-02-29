<?php

namespace App\Http\Controllers;

use App\Models\Filliere;
use Illuminate\Http\Request;

class FilliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filiere.AddFiliere');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required',
            
        ]);

        $filiere = new Filliere();
        $filiere->name = $request->name;
        // Add other fields as needed
        $filiere->save();

        return redirect('/')->with('success', 'Filiere created successfully!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Filliere $filliere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filliere $filliere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filliere $filliere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filliere $filliere)
    {
        //
    }
}
