@extends('main')

@section('content')

<h1 align="center">Perfil Usuario</h1>
<br>

<h1>Usuario: {{$usuario->name}}</h1>
<h2>Email: {{$usuario->email}}</h2>

<h1 align='center'>Peliculas cargadas</h1>
      <br>
    <div class="buttons">
        @forelse ($peliculas as $pelicula)
          <article class='pelicula' >
          <h4 class="name">{{$pelicula->title}}</h4>
          <p class="rating">{{$pelicula->rating}}</p>
          <p class="awards">Premios: {{$pelicula->awards}}</p>
          <div class="botoneditarperfil" >
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
        </article>
          @empty
          <h2>No tienes películas cargadas</h2>
          <br>
          <br>
          @endforelse
    </div>

@endsection
