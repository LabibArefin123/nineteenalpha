<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('year', 'desc')->get();
        $products = Product::latest()->get();

        return view('welcome', compact('achievements', 'products'));
    }

    public function achievement_store(Request $r)
    {
        $ac = Achievement::create($r->validate([
            'year' => 'required|integer',
            'title' => 'required|string|max:255',
        ]));
        return response()->json(['success' => true, 'achievement' => $ac]);
    }

    public function achievement_update(Request $r, Achievement $achievement)
    {
        $achievement->update($r->validate([
            'year' => 'required|integer',
            'title' => 'required|string|max:255',
        ]));
        return response()->json(['success' => true, 'achievement' => $achievement]);
    }

    public function achievement_destroy(Achievement $achievement)
    {
        $achievement->delete();
        return response()->json(['success' => true]);
    }

    public function founder_message()
    {
        return view('founder_message');
    }

    public function about()
    {
        return view('about');
    }

    public function capabilities()
    {
        return view('capabilities');
    }
    public function capabilities_air()
    {
        return view('capability.air');
    }
    public function capabilities_sea()
    {
        return view('capability.sea');
    }
    public function capabilities_land()
    {
        return view('capability.land');
    }
    public function capabilities_weapon()
    {
        return view('capability.weapon');
    }

   
}
