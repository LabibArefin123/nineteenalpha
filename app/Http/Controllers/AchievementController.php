<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
     public function index()
    {
        $achievements = Achievement::orderBy('year', 'desc')->get();
        return view('achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('achievements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|digits:4|integer',
            'title' => 'required|string|max:255',
        ]);

        Achievement::create($request->all());

        return redirect()->route('home')->with('success', 'Achievement added successfully.');
    }

    public function edit(Achievement $achievement)
    {
        return view('achievements.edit', compact('achievement'));
    }

    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'year' => 'required|digits:4|integer',
            'title' => 'required|string|max:255',
        ]);

        $achievement->update($request->all());

        return redirect()->route('achievements.index')->with('success', 'Achievement updated successfully.');
    }

    public function destroy(Achievement $achievement)
    {
        $achievement->delete();

        return redirect()->route('achievements.index')->with('success', 'Achievement deleted.');
    }
}
