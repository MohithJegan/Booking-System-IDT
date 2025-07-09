<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     $request->validate([
    //     'name' => 'required',
    //     'description' => 'nullable',
    //     'price' => 'required|numeric',
    // ]);

    // Service::create($request->all());
    // return redirect()->route('services.index')->with('success', 'Service created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //     $request->validate([
    //     'name' => 'required',
    //     'price' => 'required|numeric',
    // ]);

    // $service->update($request->all());
    // return redirect()->route('services.index')->with('success', 'Service updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $service->delete();
        // return redirect()->route('services.index')->with('success', 'Service deleted!');
    }
}
