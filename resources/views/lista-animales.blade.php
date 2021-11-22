@extends('layouts.app')

@section('content')
<div class="container">
        <br><br><br><br>
        <div class="row justify-content-center">
            <div class="col-5">
              
                <div class="form-group row">
                    <label for="corral" class="col-sm-2 col-form-label">Corral*</label>
                    <div class="col-sm-10">
                    <select class="form-control @error('corral') is-invalid @enderror" onchange="ShowSelected();" id="corral" name="corral" value="{{ old('corral') }}" required autocomplete="corral" autofocus>
                        <option>Elija una opción</option>
                        @foreach ($corrales as $corral)
                            <option value="{{ $corral->id }}">{{$corral->nombre}}</option>
                        @endforeach
                        
                    </select>
                      
                    <br>
                    <input type="button" onclick="busquedaAnimal();" class="btn btn-info btn-icon-split" id="btn-enviar" value="Buscar Animal">
                    </div>
                </div>

            </div>
            <div class="col-5">
              Lista Animales
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Detalle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                    </tbody>
                  </table>

            </div>

          </div>



</div>
@endsection
@section('scripts')
<script src="{{ asset('/js/animales.js') }}"></script>
@endsection