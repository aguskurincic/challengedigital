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

  {{-- BOTONES EDITAR / ELIMINAR --}}
<div class="botonesEM">
    {{-- <form class="buttoncolor" action="/agregarPelicula" method="post">
       @csrf
       <input type="hidden" name="id" value="{{$pelicula->id}}">
       <button type="submit" class="btn btn-success" id="colorbtn">Agregar Película</a>
     </form> --}}

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

  <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Actores</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
          </div>
        </div>
  </div>

  {{-- <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  </main> --}}

@endsection
