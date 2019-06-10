<?php

namespace App\Http\Controllers;

use App\CV;
use App\Exports\CVExport;
use App\Mail\NewCV;
use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\NewSpontaneousCv;

class CVController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth') -> except('store','sendMail');
    }
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
            return back() -> withErrors($cv -> validator($request) -> errors())->withInput($request->all());

        $cv -> name = $request -> name;
        $cv -> surname = $request -> surname;
        $cv -> phone = $request -> phone;
        $cv -> email = $request -> email;
        $cv -> term_1 = $request -> term_1??0;
        $cv -> term_2 = $request -> term_2??0;
        $cv -> term_3 = $request -> term_3??0;
        $cv -> offer_id = $request -> offer_id;

        $path = $request->file('file')->store('cv','public');

        $cv -> file = $path;
        $cv -> save();
        Mail::to('contact@cadm.pl') -> send(new NewCV($cv));
        return back() -> withErrors(['success' => true]);
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
    public function export(Offer $offer){
        return Excel::download(new CVExport($offer), 'cvs.xlsx');
    }
    public function exportAll(){
        return Excel::download(new CVExport, 'cvs.xlsx');
    }
    public function sendMail(Request $request){

        $validator =  Validator::make(request() -> all(), [
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'phone' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'type' => ['required', 'string'],
            'location' => ['required', 'string'],
            'term_1' => ['required', 'string'],
            'file' => ['required','max:2048','mimes:pdf,doc']
        ]);

        if($validator -> fails())
            return response() -> json(['status' =>'validation_errors','errors' => $validator -> errors()]);
        $path = request() ->file('file')->store('cv','public');
        Mail::to('contact@cadm.pl') -> send(new NewSpontaneousCv($request,$path));
        Storage::disk('public')->delete($path,'public');
        return response() -> json(request() -> all());
    }
}
