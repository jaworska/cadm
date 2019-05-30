<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $offers = Offer::all();
        return view('auth.home',compact('offers'));
    }
    public function home(){
        return view('home');
    }
    public function group(){
        return view('group');
    }
    public function services(){
        return view('services');
    }
    public function sectors(){
        return view('sectors');
    }
    public function contact(){
        return view('contact');
    }
    public function team(){
        $offers = Offer::whereActive(1)->orderBy('priority')-> take(8)->get();
        return view('team',compact('offers'));
    }
    public function application(){
        $offers = Offer::whereActive(1)->orderBy('priority')-> take(8)->get();
        return view('application',compact('offers'));
    }
    public function career(){
        $offers = Offer::where('active',1) ->orderBy('priority')-> take(8) -> get();
        return view('career.index',compact('offers'));
    }
    public function careerShow(Offer $offer){
        return view('career.show',compact('offer'));
    }
    public function filter(){
        if(request('filter')!='all')
            $offers = Offer::whereActive(1)->where('location','like',request('filter'))->orderBy('priority')-> take(request('number')??8)-> get();
        else
            $offers = Offer::whereActive(1)->orderBy('priority')-> take(request('number')??8)->get();
        return response() ->view('career.list_items',compact('offers'));
    }

}
