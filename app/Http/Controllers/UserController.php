<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Movie;

class UserController extends Controller
{
    public function index(){
    $usuario = Auth::user();
    $peliculas = Movie::where('movie_id', '=' , $usuario->id)->get();
    return view('verPerfil', compact('usuario', 'peliculas'));
    }
}
