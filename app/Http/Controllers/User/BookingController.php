<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Flight;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function store(Flight $flight) {
        Booking::create([
            'user_id' => Auth::id(),
            'flight_id' => $flight->id,
            'booking_code' => 'BOOK-'. strtoupper(Str::random(6)),
            'booking_date' => now()
        ]);

        return redirect('/my-bookings');
    }

    public function index() {
        $bookings = Booking::where('user_id', Auth::id())->get();
        return view('user.bookings', compact('bookings'));
    }
}
