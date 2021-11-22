@extends('layouts.app')

@section('content')
<br><br>
  <div class="container">
    <a class="btn btn-info" href="{{ route('inicio') }}" >Atras</a>
      <div class="row  justify-content-center">
        <span class="badge bg-success text-white rounded-pill py-2 px-3 mb-12"><h4>Formulario Corral</h4></span>
      </div>
      <br><br>
  <div class="row justify-content-center">
    <div class="col-8">
        <form  method="POST" action="{{ route('registro-corral') }}">
            @csrf

            {{--  <div class="form-group row">
                <label for="animal" class="col-sm-2 col-form-label">Animal*</label>
                <div class="col-sm-10">
                <select class="form-control @error('animal') is-invalid @enderror" name="animal" value="{{ old('animal') }}" required autocomplete="animal" autofocus>
                    <option>Elija una opción</option>
                    @foreach ($animales as $animal)
                        <option value="{{ $animal->id }}">{{$animal->nombre}}</option>
                    @endforeach
                    
                </select>
                  
                </div>
            </div>  --}}


            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="capacidad" class="col-sm-2 col-form-label">Capacidad (Metros cubicos)*</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control @error('capacidad') is-invalid @enderror" name="capacidad" value="{{ old('capacidad') }}" required autocomplete="capacidad" autofocus>
                  @error('capacidad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="detalle" class="col-sm-2 col-form-label">Detalle*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('detalle') is-invalid @enderror" name="detalle" value="{{ old('detalle') }}" required autocomplete="detalle" autofocus>
                  @error('detalle')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
                </div>
            </div>

            <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <br><br>
          @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

    </div>
  </div>
  </div>
  @endsection
@section('scripts')
@endsection