<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all films from the database
        $films = Pelicula::all();
        return view('pelicules.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelicules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'Nom_pelicula' => 'required|string',
        'Sinopsis' => 'required|string',
        'Pais_origen' => 'required|string',
        'Durada' => 'required|integer',
        'Data_estreno' => 'required',
    ]);


    Pelicula::create($validatedData);

    return redirect()->route('pelicula.index')->with('success', 'Pel·licula afegida correctament.');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $pelicula = Pelicula::find($id);
        return view('pelicules.show', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelicula = Pelicula::find($id);
        return view('pelicules.edit', compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Nom_pelicula' => 'required|string',
            'Sinopsis' => 'required|string',
            'Pais_origen' => 'required|string',
            'Durada' => 'required|integer',
            'Data_estreno' => 'required|date',
        ]);

        $pelicula = Pelicula::find($id);
        $pelicula->update($validatedData);

        return redirect()->route('pelicula.index')->with('success', 'Pel·licula actualitzat correctament.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();

        return redirect()->route('pelicula.index')->with('success', 'Pel·licula esborrada correctament.');
    }

    public function delete($id)
    {
        $pelicula = Pelicula::find($id);
        return view('pelicules.delete', compact('pelicula'));
    }
}
