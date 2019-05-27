<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer =  new Offer;
        $offer -> title  = $request -> title;
        $offer -> location  = $request -> location;
        $offer -> description  = $request -> description;
        $offer -> range  = $request -> range;
        $offer -> offer  = $request -> offer;
        $offer -> requirements  = $request -> requirements;
        $offer -> priority = Offer::all() -> max('priority')+1??1;
        if(($offer-> validator ->fails())) {
            return $offer -> validator -> errors();
        }
        else {
            $offer->save();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('auth.offer.show',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        return view('auth.offer.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $offer -> title  = $request -> title;
        $offer -> location  = $request -> location;
        $offer -> description  = $request -> description;
        $offer -> range  = $request -> range;
        $offer -> offer  = $request -> offer;
        $offer -> requirements  = $request -> requirements;
        if(($offer-> validator ->fails())) {
            return $offer -> validator -> errors();
        }
        else {
            $offer->save();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer -> delete();
        return back();
    }
    /**
     * Update the resources priorities in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function updatePriority(Request $request)
    {
        foreach($request -> priority as $priority){
            $offer = Offer::find($priority['id']);
            $offer -> priority = $priority['priority'];
            $offer -> save();
        }
        return response('ok');
    }
}
