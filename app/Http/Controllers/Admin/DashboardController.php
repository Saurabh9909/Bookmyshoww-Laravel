<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingDetailsModel;
use App\Models\MovieModel;
use App\Models\TheatreModel;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $movies = MovieModel::all();
        $movieCount = count($movies);
        $user = User::all();
        $userCount = count($user);
        $theatre = TheatreModel::all();
        $theatreCount = count($theatre);
        $bookingdetails = BookingDetailsModel::join('booking', 'booking.id', '=', 'bookingdetails.booking_id')
            ->select('booking.*', 'bookingdetails.*')
            ->get();
        $totalRevenue = BookingDetailsModel::sum('total_amount');
        flash()->success('Your account has been restored.');
        return view("admin.dashboard", compact('movieCount', 'userCount', 'theatreCount', 'bookingdetails','totalRevenue'));
    }
    public function user_index()
    {
        $bookingdetails = BookingDetailsModel::join('booking', 'booking.id', '=', 'bookingdetails.booking_id')
            ->select('booking.*', 'bookingdetails.*')
            ->where('user_id', Auth::user()->id)
            ->get();
        $totalMoneySpend = BookingDetailsModel::where('user_id', Auth::user()->id)->sum('total_amount');
        $movieCount = count($bookingdetails);
        return view("user.dashboard", compact('bookingdetails', 'movieCount', 'totalMoneySpend'));
    }

    public function delete(BookingDetailsModel $bookingDetailsModel)
    {
        $bookingDetailsModel->delete();
        return redirect()->back();
    }
}
