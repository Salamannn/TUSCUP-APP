<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;

class SportController extends Controller
{
    public function index()
    {
        $sports = Sport::all();
        return view('admin.sports.index', compact('sports'));
    }

    public function create()
    {
        return view('admin.sports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Sport::create($request->all());

        return redirect()->route('sports.index')
            ->with('success', 'Sport created successfully.');
    }

    public function show(Sport $sport)
    {
        return view('sports.show', compact('sport'));
    }

    public function edit(Sport $sport)
    {
        return view('admin.sports.edit', compact('sport'));
    }

    public function update(Request $request, Sport $sport)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $sport->update($request->all());

        return redirect()->route('sports.index')
            ->with('success', 'Sport updated successfully.');
    }

    public function destroy(Sport $sport)
    {
        $sport->delete();

        return redirect()->route('sports.index')
            ->with('success', 'Sport deleted successfully.');
    }
}
