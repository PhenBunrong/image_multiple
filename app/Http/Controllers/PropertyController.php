<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        dd($properties);

        return view('propery.create','properties');
    }

    public function create()
    {
        return view('propery.create');
    }

    public function store(Request $request)
    {
        Property::create([
            'name' => $request->name,
            'type' => $request->type,
        ]);

        return redirect()->back();
    }
}
