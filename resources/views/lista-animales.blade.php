@extends('layouts.app')

@section('content')
<div class="container">
        <br><br><br><br>
        <div class="row justify-content-center">
            <div class="col-5">
              
                <div class="form-group row">
                    <label for="corral" class="col-sm-12 col-form-label"><b>Seleccionar Corral</b>*</label>
                    <div class="col-sm-10">
                    <select class="form-control @error('corral') is-invalid @enderror" onchange="ShowSelected();" id="corral" name="corral" value="{{ old('corral') }}" required autocomplete="corral" autofocus>
                        <option>Elija una opción</option>
                        @foreach ($corrales as $corral)
                            <option value="{{ $corral->id }}">{{$corral->nombre}}</option>
                        @endforeach
                        
                    </select>
                      
                    </div>
                </div>

            </div>
            <div class="col-5">
                <div class="row justify-content-center">
                    <h4><b>Lista Animales</b></h4>
                </div>
              
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Detalle</th>
                  </tr>
                </thead>
                <tbody id="body">
                  
                </tbody>
              </table>

            </div>

          </div>

</div>
@endsection
@section('scripts')
<script src="{{ asset('/js/animales.js') }}"></script>
@endsection