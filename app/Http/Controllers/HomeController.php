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
      $peliculas = Movie::paginate(5);
      return view('home', compact('peliculas'));
    }

    // public function ultimas(){
    //   $peliculas = Movie::whereDate('registered_at')
    // }

    public function entry(){
      return view('entry');
    }

    public function buscar(){
      $busqueda = '%' .$_GET['busqueda']. '%';
      $peliculas = Movie::where('title', 'like', "$busqueda")->get();

      return view('peliculaEncontrada', compact('peliculas'));
    }
}
