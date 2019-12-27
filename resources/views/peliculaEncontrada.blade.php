@extends('main')

@section('content')

<h1 align="center">Pelicula buscada</h1>
<br>
<div class="container">
@forelse ($peliculas as $pelicula)
  <article class='pelicula'>
    <h3 class="title">{{$pelicula->title}}</h3>
    <p class="rating">Rating: {{$pelicula->rating}}</p>
    <p class="genre">Genero: {{$pelicula->genre_id}}</p>
    <form class="" action="/verPelicula" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$pelicula->id}}">
      {{-- <button type="submit" class="btn btn-warning">Ver pelicula</a> --}}
    </form>
    <form class="" action="/verPelicula" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$pelicula->id}}">
      <button type="submit" class="btn btn-warning">Ver película</button>
    </form>
  </article>

@empty
  <p>No hay peliculas</p>
@endforelse
</div>
@endsection
