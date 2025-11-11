<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }

    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'description' => 'nullable|string',
            'price_range_start' => 'nullable|numeric|min:0',
            'price_range_end' => 'nullable|numeric|min:0',
            'contact_phone' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'status' => 'required|in:active,inactive'
        ]);

        Property::create($request->all());

        return redirect()->route('properties.index')->with('success', 'Properti berhasil dibuat!');
    }

    public function show(Property $property)
    {
        return view('properties.show', compact('property'));
    }

    public function edit(Property $property)
    {
        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'description' => 'nullable|string',
            'price_range_start' => 'nullable|numeric|min:0',
            'price_range_end' => 'nullable|numeric|min:0',
            'contact_phone' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'status' => 'required|in:active,inactive'
        ]);

        $property->update($request->all());

        return redirect()->route('properties.index')->with('success', 'Properti berhasil diupdate!');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('properties.index')->with('success', 'Properti berhasil dihapus!');
    }
}