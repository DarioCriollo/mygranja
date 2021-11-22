@extends('layouts.app')

@section('content')
<br><br>
  <div class="container">
    <a class="btn btn-info" href="{{ route('inicio') }}" >Atras</a>
      <div class="row  justify-content-center">
        <span class="badge bg-success text-white rounded-pill py-2 px-3 mb-12"><h4>Asignación Corrales Corrales</h4></span>
      </div>
      <br><br>
  <div class="row justify-content-center">
    <div class="col-8">
        <form  method="POST" action="{{ route('registro-asignacion') }}">
            @csrf

            <div class="form-group row">
                <label for="corral" class="col-sm-2 col-form-label">Corral*</label>
                <div class="col-sm-10">
                <select class="form-control @error('corral') is-invalid @enderror" name="corral" value="{{ old('corral') }}" required autocomplete="corral" autofocus>
                    <option>Elija una opción</option>
                    @foreach ($corrales as $corral)
                        <option value="{{ $corral->id }}">{{$corral->nombre}}</option>
                    @endforeach
                    
                </select>
                  
                </div>
            </div>

            <div class="form-group row">
                <label for="animal" class="col-sm-2 col-form-label">Animal*</label>
                <div class="col-sm-10">
                <select class="form-control @error('animal') is-invalid @enderror" name="animal" value="{{ old('animal') }}" required autocomplete="animal" autofocus>
                    <option>Elija una opción</option>
                    @foreach ($animales as $animal)
                        <option value="{{ $animal->id }}">{{$animal->nombre}}</option>
                    @endforeach
                    
                </select>
                  
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