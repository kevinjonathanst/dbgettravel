<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tour::all();
        return view('index')->with([
            'data' => $data
        ]);
        error_log('Index called');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        info('Create called');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        Tour::insert($data);
        return redirect('/tours');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        $data = DB::table('tours') ->join('itinerarytour','itinerarytour.tour_id', '=', 'tours.id') ->where('itinerarytour.tour_id','=',$tour->id) ->get();
        $itinerary = DB::table('itinerarytour')->get();
        return view('show', compact('tour'))->with([
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response1
     */
    public function edit(Tour $tour)
    {
        $data = Tour::findOrFail($tour->id);
        return view('edit')->with([
            'data' => $data
        ]);
        error_log('Index called');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        $data = Tour::findOrFail($tour->id);
        $data->destination = $request ->input('destination');
        $data->nameoftravel = $request ->input('nameoftravel');
        $data->email = $request ->input('email');
        $data->phone = $request ->input('phone');
        $data->picname = $request ->input('picname');
        $data->save();
        return redirect('/tours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $data = Tour::findOrFail($tour->id);
        $data->delete();
        return redirect('/tours');
    }
}
