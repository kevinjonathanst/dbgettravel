<?php

namespace App\Http\Controllers;

use App\Models\Flights;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Flights::all();
        return view('indexFlights')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createFlights');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);//gg ada lagi
        Flights::insert($data);
        return redirect('/flights');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flights  $flights
     * @return \Illuminate\Http\Response
     */
    public function show(Flights $flights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flights  $flights
     * @return \Illuminate\Http\Response
     */
    public function edit(Flights $flights)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flights  $flights
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flights $flights)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flights  $flights
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flights $flights)
    {
        //
    }
}
