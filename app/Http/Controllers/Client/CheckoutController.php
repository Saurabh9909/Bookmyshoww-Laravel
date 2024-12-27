<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\MultiplexModel;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $seats = $request->input('seats');
        $total = $request->input('total');

        if (is_array($seats) && count($seats) > 0) {
            return response()->json([
                'success' => true,
                'message' => "Seats selected successfully",
                'redirect_url' => route('movie.confirmation', ['seats' => implode(',', $seats), 'totalamount' => $total])
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'No seats selected!'
        ], 400);
    }
    public function confirmation(Request $request)
    {
        $seats = explode(',', $request->input('seats'));
        $totalamount =  $request->input('totalamount');
        $multiplex = MultiplexModel::where('id', session('multiplex_id'))->first();
        $str = "TB";
        $ticketNumber = $str . rand(0, 100000);
        return view('client.pages.checkout', compact('seats', 'totalamount', 'multiplex', 'ticketNumber'));
    }
}
