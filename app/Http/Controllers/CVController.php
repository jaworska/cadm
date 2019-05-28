<?php

namespace App\Http\Controllers;

use App\CV;
use Illuminate\Http\Request;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cv = new CV;

        if($cv -> validator($request) -> fails())
            return response() -> json($cv -> validator($request) -> errors());

        $cv -> name = $request -> name;
        $cv -> phone = $request -> phone;
        $cv -> email = $request -> email;
        $cv -> term_1 = $request -> term_1??0;
        $cv -> term_2 = $request -> term_2??0;
        $cv -> term_3 = $request -> term_3??0;
        $cv -> offer_id = $request -> offer_id;

        $path = $request->file('file')->store('','public');

        $cv -> file = $path;
        $cv -> save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function show(CV $cV)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function edit(CV $cV)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CV $cV)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function destroy(CV $cV)
    {
        abort(404);
    }
}
