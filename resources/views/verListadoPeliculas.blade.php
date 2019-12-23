@extends('main')

@section('content')

<h1>Listado de peliculas</h1>
<br>

<div class="">
  <ul>
  @forelse ($peliculas as $pelicula)
    <li>{{$pelicula->title}}</li>
    <li>{{$pelicula->genre_id}}</li>
  @empty

  @endforelse
  </ul>
</div>

{{$peliculas->links()}}

@endsection
