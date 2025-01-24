<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\BookigDetailsMail;
use App\Models\Booking;
use App\Models\BookingDetailsModel;
use App\Models\BookingsModel;
use App\Models\MultiplexModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
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

        $user_details = User::find(Auth::user()->id);
        session([
            'user_id' => $user_details->id,
            'user_name' => $user_details->name,
            'user_email' => $user_details->email,
            'phone_number' => $user_details->phone_number,
        ]);
        return view('client.pages.checkout', compact('seats', 'totalamount', 'multiplex', 'ticketNumber'));
    }
    public function bookingdetails(Request $request)
    {
        $bookingDetails = new BookingDetailsModel();
        $bookings = new Booking();

        // bookings
        $bookings->ticket_no = $request->ticketNumber;
        $bookings->booking_date = session('movie_date');
        $bookings->save();

        // bookingdetails
        $bookingDetails->movie_id = session('movie_id');
        $bookingDetails->movie_time = session('movie_time');
        $bookingDetails->multiplex_id = session('multiplex_id');
        $bookingDetails->seat_number = implode(',', $request->seats);
        $bookingDetails->total_seat = $request->totalseat;
        $bookingDetails->total_amount = $request->totalamount;
        $bookingDetails->user_id = session('user_id');
        $bookingDetails->booking_id = $bookings->id;
        $bookingDetails->save();

        $user = User::where('id', Auth::user()->id)->get();
        Mail::to($user[0]->email)->send(new BookigDetailsMail($bookingDetails, $user, $bookings));
        return redirect()->route('home');
    }
}
