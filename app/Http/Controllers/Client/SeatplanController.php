<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\MovieModel;
use App\Models\TicketpriceModel;
use Illuminate\Http\Request;

class SeatplanController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(['message' => 'Seats saved successfully']);
    }
    public function seat(Request $request)
    {
        $movie_details = MovieModel::where("id", $request->id)->first();
        $ticketprice = TicketpriceModel::where("multiplex_id", session('multiplex_id'))->first();
        return view("client.pages.seat-plan", compact('ticketprice'));
    }
    public function seat_plan(Request $request)
    {
        $movie_details = MovieModel::where("id", $request->id)->first();
        session([
            'movie_time' => $request->movie_time,
            'multiplex_id' => $request->multiplex_id,
            'movie_date'=> $request->movie_date
        ]);
        return response()->json([
            'message' => 'success',
            'redirect_url' => route('movie.seatplan.post', $movie_details->id)
        ]);
    }
}
