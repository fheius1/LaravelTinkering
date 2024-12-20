<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//        dd($request->all());
        $validatedData = $request->validate([
            'marca' => 'required|string',
            'model' => 'required|string',
            'any_fabricacio' => 'required',
            'color_fabrica' => 'required|string',
            'preu' => 'required|numeric|min:0',
            'info_adicional' => 'string',

        ]);


        Vehicle::create($validatedData);

        return redirect()->route('vehicle.index')->with('success', 'Vehicle afegit correctament');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'marca' => 'required|string',
            'model' => 'required|string',
            'any_fabricacio' => 'required',
            'color_fabrica' => 'required|string',
            'preu' => 'required|numeric|min:0',
            'info_adicional' => 'string',
        ]);

        $vehicle = Vehicle::find($id);
        $vehicle->update($validatedData);

        return redirect()->route('vehicle.index')->with('success', 'Vehicle actualitzat correctament.');
    }


    public function delete($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.delete', compact('vehicle'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('vehicle.index')->with('success', 'Model eliminat correctament.');
    }
}
