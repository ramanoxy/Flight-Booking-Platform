<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index() {
        $airports = Airport::all();
        return view('admin.airports.index', compact('airports'));
    }

    public function create() {
        return view('admin.airports.create');
    }

    public function store(Request $request) {
        Airport::create($request->all());
        return redirect()->route('airports.index');
    }

    public function edit(Airport $airport) {
        return view('admin.airports.edit', compact('airport'));
    }

    public function update(Request $request, Airport $airport) {
        $airport->update($request->all());
        return redirect()->route('airports.index');
    }

    public function destroy(Airport $airport) {
        $airport->delete();
        return back();
    }
}
