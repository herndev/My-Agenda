<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use \Carbon\Carbon;
use App\Models\Agenda;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mytime = Carbon::now();
        $agendas = Agenda::where('user_id', Auth::user()->id)->get();
        return view('home', ['time' => $mytime->format('d-m-Y'), "agendas" => $agendas]);
    }

    public function edit($id)
    {
        $mytime = Carbon::now();
        $agendas = Agenda::where('user_id', Auth::user()->id)->get();
        $agenda = Agenda::find($id);
        return view('home', ['time' => $mytime->format('d-m-Y'), "agendas" => $agendas, "id"=>$id, "editagenda"=> $agenda]);
        // return dd($id);
    }
}
