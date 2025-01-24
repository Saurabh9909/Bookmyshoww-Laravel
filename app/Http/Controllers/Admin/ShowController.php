<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Show;

class ShowController extends Controller
{
    // Display a listing of the resource.
    public function list()
    {
        $shows = Show::all();
        return view('admin.pages.shows.list', compact('shows'));
    }

    public function add()
    {
        return view('admin.pages.shows.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'show_start_time' => 'required|string',
            'show_end_time' => 'required|string',
            'language' => 'required|array',
            'show_type' => 'required|in:2d,3d',
        ]);
        $language = implode(',', $request->language);

        Show::create([
            'show_start_time' => $request->show_start_time,
            'show_end_time' => $request->show_end_time,
            'language' => $language,
            'show_type' => $request->show_type,
        ]);


        return redirect()->route('shows.list')
            ->with('success', 'Show created successfully.');
    }

    public function edit(Show $show)
    {
        return view('admin.pages.shows.edit', compact('show'));
    }

    public function update(Request $request, Show $show)
    {
        $request->validate([
            'show_start_time' => 'required|string',
            'show_end_time' => 'required|string',
            'language' => 'required|array',
            'show_type' => 'required|in:2d,3d',
        ]);

        $language = implode(',', $request->language);
        $show->update([
            'show_start_time' => $request->show_start_time,
            'show_end_time' => $request->show_end_time,
            'language' => $language,
            'show_type' => $request->show_type,
        ]);
        return redirect()->route('shows.list')
            ->with('success', 'Show updated successfully.');
    }

    public function delete(Show $show)
    {
        $show->delete();

        return redirect()->route('shows.list')
            ->with('success', 'Show deleted successfully.');
    }
}
