<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

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
    public function index(Request $query)
    {
        if($query->has('search')) {
            if($query->has('scroll')) {
                dd($query->scroll);
            }
            $response = Http::get("http://www.omdbapi.com/?apikey=".env('API_KEY')."&s=".$query->search."&type=movie")->json()['Search'] ?? [];
            if($response) {
               return view('home',['response' => $response]);
            }
        }
        return view('home404');
    }

    public function findById($id) {
        if($id) {
            $response = Http::get("http://www.omdbapi.com/?apikey=".env('API_KEY')."&i=".$id)->json() ?? [];
            if($response) {
               return view('homeDetail',['detail' => $response]);
            }
            return view('home404');
        }
    }
}
