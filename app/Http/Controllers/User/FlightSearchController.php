<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use App\Models\Airport;
use Illuminate\Http\Request;

class FlightSearchController extends Controller
{
    public function index() {
        $flights = Flight::with('airline')->orderBy('departure_date')->get();
        return view('user.flights', compact('flights'));    

    }

    public function search(Request $request) {
        $request->validate([
            'origin' => 'required|different:destination',
            'destination' => 'required',
            'date' => 'required|date'
        ], [
            'origin.different' => 'Bandara asal dan tujuan tidak boleh sama',
            'date' => 'Tanggal tidak boleh kosong'
        ]);

        $flights = Flight::where('origin_airport_id', $request->origin)
            ->where('destination_airport_id', $request->destination)
            ->where('departure_date', $request->date)
            ->get();

    return view('user.results', compact('flights'));
    }
}
