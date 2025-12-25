<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    public function index() {
        $airlines = Airline::all();
        return view('admin.airlines.index', compact('airlines'));
    }

    public function create() {
        return view('admin.airlines.create');
    }

    public function store(Request $request) {
        Airline::create($request->all());
        return redirect()->route('airlines.index');
    }

    public function edit(Airline $airline) {
        return view('admin.airlines.edit', compact('airlines'));
    }

    public function update(Request $request, Airline $airline) {
        $airline->update($request->all());
        return redirect()->route('airlines.index');
    }

    public function destroy(Airline $airline) {
        $airline->delete();
        return back();
    }
}
