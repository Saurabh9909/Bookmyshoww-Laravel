<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CityModel;
use App\Models\MovieModel;
use App\Models\MultiplexModel;
use App\Models\StateModel;
use App\Models\TicketpriceModel;
use Illuminate\Http\Request;

class TicketpriceController extends Controller
{
    public function index()
    {
        $movie = MovieModel::get();
        $multiplex = MultiplexModel::get();
        return view('admin.pages.ticket_price.add', compact('movie', 'multiplex'));
    }
    public function add(Request $request)
    {
        $ticket = new TicketpriceModel();
        $ticket->ticket_price = $request->ticket_price;
        $ticket->multiplex_id = $request->multiplex_name;
        $ticket->movie_id = $request->movie_name;
        $ticket->movie_date = $request->movie_date;
        $ticket->save();
        return redirect()->route('ticketprice.list');
    }
    public function list()
    {
        $list = TicketpriceModel::all();
        return view('admin.pages.ticket_price.list', compact('list'));
    }
    public function edit(Request $request)
    {
        $ticket = TicketpriceModel::where("id", $request->id)->first();
        $movie = MovieModel::get();
        $multiplex = MultiplexModel::get();
        return view('admin.pages.ticket_price.edit', compact('ticket', 'multiplex', 'movie'));
    }
    public function update(Request $request)
    {
        $ticket = TicketpriceModel::where("id", $request->id)->first();
        $ticket->ticket_price = $request->ticket_price;
        $ticket->multiplex_id = $request->multiplex_name;
        $ticket->movie_id = $request->movie_name;
        $ticket->movie_date = $request->movie_date;
        $ticket->update();
        return redirect()->route('ticketprice.list');
    }
    public function delete(Request $request)
    {
        $ticket = TicketpriceModel::where("id", $request->id)->first();
        $ticket->delete();
        return redirect()->route('ticketprice.list');
    }
}
