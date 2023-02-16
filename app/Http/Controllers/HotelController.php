<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hotels::all();
        return view('indexHotels')->with([
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
        return view('createHotels');
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
        Hotels::insert($data);
        return redirect('/hotels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function show(Hotels $hotels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotels $hotels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotels $hotels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotels $hotels)
    {
        //
    }
}
