@extends('main')

@section('content')

{{-- <h1 align="center">{{$nombre_genre->name}}</h1>
<div class="container" id="productohome">
@forelse ($movies as $movie)
  <article class='producto'>
    <img class='imagen 'src="/storage/product/{{$producto->featured_img}}" alt="" id="imgproducto">
    <h4 class="name">{{$producto->name}}</h4>
    <p class="description">{{$producto->description}}</p>
    <p class="price">Precio: {{$producto->price}}$</p>
    <form class="" action="/addtocarrito" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$producto->id}}">
      <input type="number" name="quantity" min='0' value="">
      <button type="submit" class="btn btn-success">Agregar al carrito</a>
    </form>
    <form class="" action="/verProducto" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$producto->id}}">
      <button type="submit" class="btn btn-warning">Ver Mas</a>
    </form>
    <!-- <a href="verProducto" class="btn btn-success">Ver Mas</a> -->
  </article>

@empty
  <p>No hay productos disponibles</p>
@endforelse
</div> --}}
