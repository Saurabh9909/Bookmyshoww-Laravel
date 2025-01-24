<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.pages.bookings.index', compact('bookings'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.pages.bookings.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'ticket_no' => 'nullable|string',
            'booking_date' => 'nullable|string',
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')
            ->with('success', 'Booking created successfully.');
    }

    // Show the form for editing the specified resource.
    public function edit(Booking $booking)
    {
        return view('admin.pages.bookings.edit', compact('booking'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'ticket_no' => 'nullable|string',
            'booking_date' => 'nullable|string',
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')
            ->with('success', 'Booking updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')
            ->with('success', 'Booking deleted successfully.');
    }
}
