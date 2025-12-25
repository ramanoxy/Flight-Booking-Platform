<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use App\Models\Airport;
use App\Models\Airline;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(){
        $flights = Flight::all();
        return view('admin.flights.index', compact('flights'));
    }
    
    public function create(){
        return view('admin.flights.create', [
            'airports'=>Airport::all(),
            'airlines'=>Airline::all(),
        ]);
    }

    public function store(Request $request){
        Flight::create($request->all());
        return redirect()->route('flights.index');
    }
}
