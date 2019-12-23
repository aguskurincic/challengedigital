@extends('main')

@section('content')

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
