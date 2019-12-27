@extends('main')

@section('content')

  <br>
  <h1 align="center">Películas</h1>
  <br>

  <div class="container" id="homepelic">
    @forelse ($peliculas as $pelicula)
      <article class="pelicula">
          <h4 class="title">{{$pelicula->title}}</h4>
          <p class="rating">Rating: {{$pelicula->rating}}</p>
          <p class="awards">Awards: {{$pelicula->awards}}</p>
        <div class="botones">
          <form class="" action="/verPelicula" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$pelicula->id}}">
            <button type="submit" class="btn btn-success">Ver película</button>
          </form>

        </div>
      </article>
    @empty

    @endforelse
  </div>

  <br>
  <h1 align="center">Agregadas recientemente</h1>
  <br>

@endsection
