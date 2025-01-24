<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Show;
use App\Models\AdminModel;

class TicketController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $tickets = Ticket::all();
        return view('admin.pages.tickets.index', compact('tickets'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $shows = Show::all();
        $admins = AdminModel::all();
        return view('admin.pages.tickets.create', compact('shows', 'admins'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'show_id' => 'required|exists:show,id',
            'admin_id' => 'required|exists:admin,id',
            'ticket_no' => 'required|string|unique:tickets',
            'show_date' => 'required|date',
            'seat_no' => 'required|string',
            'price' => 'required|numeric',
            'hall_no' => 'required|string',
        ]);

        Ticket::create($request->all());

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket created successfully.');
    }
    // Show the form for editing the specified resource.
    public function edit(Ticket $ticket)
    {
        $shows = Show::all();
        $admins = AdminModel::all();
        return view('admin.pages.tickets.edit', compact('ticket', 'shows', 'admins'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'show_id' => 'required|exists:show,id',
            'admin_id' => 'required|exists:admin,id',
            'ticket_no' => 'required|string|unique:tickets,ticket_no,' . $ticket->id,
            'show_date' => 'required|date',
            'seat_no' => 'required|string',
            'price' => 'required|numeric',
            'hall_no' => 'required|string',
        ]);

        $ticket->update($request->all());

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket deleted successfully.');
    }
}
