@extends('main')

@section('content')

<div class="">
  <ul>
  @forelse ($peliculas as $pelicula)
    <li>{{$pelicula->name}}</li>
    <li>{{$pelicula->rating}}</li>
  @empty

  @endforelse
  </ul>
</div>

@endsection
