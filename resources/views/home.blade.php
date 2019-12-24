@extends('main')

@section('content')

  <br>
  <h1>Películas</h1>
  <br>

  <div class="container" id="homepelic">
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
        {{-- <a href="/verPelicula"><div class="col-md-4">.col-md-4</div></a> --}}
        </div>
      </article>
    @empty

    @endforelse
  </div>

  <br>
  <h1>Agregadas recientemente</h1>
  <br>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
