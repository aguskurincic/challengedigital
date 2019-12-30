<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $peliculas = Movie::all()->random(5);
      $ultimaspeliculas = Movie::orderby('created_at', 'desc')->take(5)->get();
      return view('home', compact('peliculas', 'ultimaspeliculas'));
    }

    public function entry(){
      return view('entry');
    }

    public function buscar(){
      $busqueda = '%' .$_GET['busqueda']. '%';
      $peliculas = Movie::where('title', 'like', "$busqueda")->get();

      return view('peliculaEncontrada', compact('peliculas'));
    }
}
