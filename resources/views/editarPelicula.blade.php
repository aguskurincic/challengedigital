@extends('main')

@section('content')

  <h1 align="center">Editar película</h1>
  <br>

  <div class="">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <form method="POST" action="/peliculaEditada" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="genre_id" class="col-md-4 col-form-label text-md-right">{{ __('Género') }}</label>

                        <div class="col-md-6">
                          <select class="" name="genre_id">
                            @foreach($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                            @endforeach
                          </select>


                            @error('genre_id')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rating" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>

                        <div class="col-md-6">
                            <input id="rating" type="number" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus>

                            @error('rating')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="awards" class="col-md-4 col-form-label text-md-right">{{ __('Premios') }}</label>

                        <div class="col-md-6">
                            <input id="awards" type="number" class="form-control @error('awards') is-invalid @enderror" name="awards" value="{{ old('awards') }}" required autocomplete="awards">

                            @error('awards')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="length" class="col-md-4 col-form-label text-md-right">{{ __('Duración') }}</label>

                        <div class="col-md-6">
                            <input id="length" type="number" class="form-control @error('length') is-invalid @enderror" name="length" value="{{ old('length') }}" required autocomplete="length">

                            @error('length')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="release_date" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de estreno') }}</label>

                        <div class="col-md-6">
                            <input id="release_date" type="date" class="form-control @error('release_date') is-invalid @enderror" name="release_date" value="{{ old('release_date') }}" required autocomplete="release_date">

                            @error('release_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                  </div>

                <br>
                    <div class="form-group row mb-0" id="botoncargar">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success" value="{{$pelicula->id}}">
                                {{ __('Editar película') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
  </div>




@endsection
