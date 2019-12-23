@extends('main')

@section('content')
  <br>
  <h1>Películas</h1>
  <br>

  <div class="container">
    @forelse ($peliculas as $pelicula)
      <article class="pelicula">
          <h4 class="title">{{$pelicula->title}}</h4>
          <p class="rating">Rating: {{$pelicula->rating}}</p>
          <p class="awards">Awards: {{$pelicula->awards}}</p>
        <div class="botones">
          <form class="" action="/verPelicula" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$pelicula->id}}">
            <button type="submit" class="btn btn-warning">Ver película</button>
          </form>
        <a href="/verPelicula"><div class="col-md-4">.col-md-4</div></a>

        </div>
      </article>
    @empty

    @endforelse
  </div>




  <div class="row">
    {{-- @forelse ($movies as $movie) --}}
      <a href="/verPelicula"><div class="col-md-4">Pelicula 1</div></a>
      <a href="/verPelicula"><div class="col-md-4">Pelicula 2</div></a>
      <a href="/verPelicula"><div class="col-md-4">Pelicula 3</div></a>
      <a href="/verPelicula"><div class="col-md-4">Pelicula 4</div></a>
      <a href="/verPelicula"><div class="col-md-4">Pelicula 5</div></a>
    {{-- @empty

    @endforelse --}}
  </div>

    <br>
    <h1>Agregadas recientemente</h1>
    <br>

    <div class="row">
        <a href="/verPelicula"><div class="col-md-4">Pelicula agregada 1</div></a>
        <a href="/verPelicula"><div class="col-md-4">Pelicula agregada 2</div></a>
        <a href="/verPelicula"><div class="col-md-4">Pelicula agregada 3</div></a>
        <a href="/verPelicula"><div class="col-md-4">Pelicula agregada 4</div></a>
        <a href="/verPelicula"><div class="col-md-4">Pelicula agregada 5</div></a>
    </div>



@endsection
