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
    public function edit(Movie $movie, Request $req)
    {
        $movie = Movie::find($req->id);
        $genres = Genre::all();

        return view('editarPelicula', compact('movie', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $movie = Movie::find($request->id);

        $movie->title = $request->title;
        $movie->rating = $request->rating;
        $movie->awards = $request->awards;
        $movie->release_date = $request->release_date;
        $movie->length = $request->length;
        $movie->genre_id = $request->genre_id;
        $movie->save();

        return view('verPelicula', compact('movie'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie, Request $req)
    {
        $movie = Movie::find($req->id);
        $movie->delete();

        return view('eliminarPelicula', compact('movie'));
    }
}
