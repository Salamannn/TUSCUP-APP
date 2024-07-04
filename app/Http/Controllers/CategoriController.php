<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Sport;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    public function index(Sport $sport)
    {
        $categories = $sport->categories();
        return view('admin.categories.index', compact('sports','categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Sport::create($request->all());

        return redirect()->back()
            ->with('success', 'Sport created successfully.');
    }

    public function show()
    {
        
    }

    public function edit(Categori $categories)
    {
        return view('admin.categories.edit', compact('categories'));
    }

    public function update(Request $request, Categori $categories)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $categories->update($request->all());

        return redirect()->back()
            ->with('success', 'Sport updated successfully.');
    }

    public function destroy(Categori $categories)
    {
        $categories->delete();

        return redirect()->back()
            ->with('success', 'Sport deleted successfully.');
    }
}
