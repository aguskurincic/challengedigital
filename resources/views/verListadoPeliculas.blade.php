@extends('main')

@section('content')

<div class="">
  <ul>
  @forelse ($peliculas as $pelicula)
    <li>{{$pelicula->title}}</li>
    <li>{{$pelicula->rating}}</li>
  @empty

  @endforelse
  </ul>
</div>

@endsection
