<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RouteController extends Controller
{
    public function searchRoute(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');

        // Construct the route long name
        $routeLongName = "{$from} - {$to}";

        // Search for the route in the database
        $route = Route::where('route_long_name', $routeLongName)->first();

        if ($route) {
            // Redirect to the specific route page
            return redirect()->route('route.show', ['id' => $route->route_id]);
        }

        // If no match found, redirect back with an error message
        return redirect()->back()->with('error', 'Route not found.');
    }
    public function show($id)
    {
        $route = Route::findOrFail($id);

        return view('route.show', compact('route'));
    }
}
