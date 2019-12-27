<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Auth;
use App\Genre;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Movie::paginate(10);
        return view('verListadoPeliculas', compact('peliculas'));
    }

    public function cargar(){
      $genres = Genre::all();
      return view('agregarPelicula', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nueva_pelicula = new Movie;
        // $path = $request['featured_img']->store('public/img');

        $nueva_pelicula->title = $request->title;
        $nueva_pelicula->rating = $request->rating;
        $nueva_pelicula->awards = $request->awards;
        $nueva_pelicula->release_date = $request->release_date;
        $nueva_pelicula->length = $request->length;
        $nueva_pelicula->genre_id = $request->genre_id;
        $nueva_pelicula->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $pelicula, Request $request)
    {
        $pelicula = Movie::find($request->id);

        return view('verPelicula', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $pelicula, Request $req)
    {
        $pelicula = Movie::find($req->id);
        $genres = Genre::all();

        return view('editarPelicula', compact('pelicula', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $pelicula)
    {
        $pelicula = Movie::find($request->id);

        $pelicula->title = $request->title;
        $pelicula->rating = $request->rating;
        $pelicula->awards = $request->awards;
        $pelicula->release_date = $request->release_date;
        $pelicula->length = $request->length;
        $pelicula->genre_id = $request->genre_id;
        $pelicula->save();

        return view('verPelicula', compact('pelicula'));
    }

    public function listadoAPI(){
      $peliculas = Movie::all();
      return json_encode($peliculas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $pelicula, Request $req)
    {
        $pelicula = Movie::find($req->id);
        $pelicula->delete();

        return view('eliminarPelicula', compact('pelicula'));
    }
}
