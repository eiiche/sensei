<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function getReservationBySeito(Request $request){
        $reservation = Reservation::with('sensei','sensei.images')->where('seito_id',$request->id)->get();
        return response()->json($reservation);
    }
}
