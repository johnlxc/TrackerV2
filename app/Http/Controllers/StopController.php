<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Stop;
use App\Repositories\StopRepository;

class StopController extends Controller
{

     protected $stops;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(StopRepository $stops)
    {
        $this->middleware('auth');

	$this->stops = $stops;
    }

    public function index(Request $request)
    {

    return view('stops.index', [
        'stops' => $this->stops->forUser($request->user()),
    ]);

    }

    public function store(Request $request)
    {
    $this->validate($request, [
        'location' => 'required|max:255',
        'mileage' => 'required|max:255',
	'number_gallons' => 'required|max:255',
	'gas_price' => 'required|max:255',
    ]);

    // Create The Task...
    $request->user()->stops()->create([
        'location' => $request->location,
        'mileage' => $request->mileage,
        'number_gallons' => $request->number_gallons,
        'gas_price' => $request->gas_price,
        'notes' => $request->notes,

    ]);

    return redirect('/stops');
    }

    public function destroy(Request $request, Stop $stop)
    {
        $this->authorize('destroy', $stop);
        $stop->delete();
        return redirect('/stops');
    }
}
