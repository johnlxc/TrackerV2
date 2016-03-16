<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StopController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

    $stops = Stop::where('user_id', $request->user()->id)->get();

    return view('stops.index', [
        'stops' => $stops,
    ]);

    }

    public function store(Request $request)
    {
    $this->validate($request, [
        'location' => 'required|max:255',
        'gas_mileage' => 'required|max:255',
	'num_gallons' => 'required|max:255',
	 'gas_price' => 'required|max:255',
    ]);

    // Create The Task...
    $request->user()->stops()->create([
        'location' => $request->location,
        'gas_mileage' => $request->gas_mileage,
        'num_gallons' => $request->num_gallons,
        'gas_price' => $request->gas_price,
        'notes' => $request->notes,

    ]);

    return redirect('/stops');
    }
}
