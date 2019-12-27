@extends('main')

@section('content')


  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
          <h1 class="name">{{$pelicula->title}}</h1>
          <br>
          <p class="rating">Rating: {{$pelicula->rating}}</p>
          <p class="awards">Awards: {{$pelicula->awards}}</p>
          <p class="release">Fecha de estreno: {{$pelicula->release_date}}</p>
          <p class="length">Duración: {{$pelicula->length}} min.</p>
          <p class="genre_id">Género: {{$pelicula->genre_id}}</p>
      </div>
  </div>

  <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Actores</strong>
              {{-- <ul>
                @forelse ($actores as $actor)
                  <li>{{$actor->first_name}}</li>
                  <li>{{$actor->last_name}}</li>
                @empty

                @endforelse
              </ul> --}}
                    {{-- <ul>
                      <li>{{$actores->first_name}} {{$actores->last_name}}</li>
                    </ul> --}}
            </div>
          </div>
        </div>
  </div>

  {{-- BOTONES EDITAR / ELIMINAR --}}
<div class="botonesEM">

     <form class="buttoncolor" action="/editarPelicula" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$pelicula->id}}">
      <button type="submit" class="btn btn-warning" id="colorbtn">Editar Película</a>
    </form>

    <form class="buttoncolor" action="/eliminarPelicula" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$pelicula->id}}">
      <button type="submit" class="btn btn-danger" id="colorbtn">Eliminar Película</a>
    </form>
</div>

@endsection
