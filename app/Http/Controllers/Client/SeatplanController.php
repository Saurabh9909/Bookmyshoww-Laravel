<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeatplanController extends Controller
{
    public function index(Request $request)
    {
        $selectedSeat = $request->input('seats');
        return response()->json(['message'=>'Seats saved successfully']);
    }
}