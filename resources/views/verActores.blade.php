@extends('main')

@section('content')

<h1>Listado de actores</h1>
<br>

  <div class="">
    <ul>
    @forelse ($actores as $actor)
      <li>{{$actor->getNombreCompleto()}}</li>
      {{-- <li>{{$actor->last_name}}</li> --}}
    @empty

    @endforelse
    </ul>
  </div>

  {{$peliculas->links()}}

  @endsection
