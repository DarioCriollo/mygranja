@extends('layouts.app')

@section('content')
<div class="container">
        <br><br><br><br>
        <div class="row justify-content-center">
            <div class="col-5">
              
                <a class="card lift h-100" href="{{ route('gestion-animales') }}">
                    <div class="card-body d-flex justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <img src="{{ asset('img/book.svg') }}" alt="..." style="width: 4rem">
                                <h5>Gestión Animales</h5>
                                <div class="text-muted small">Registra tus animales de forma segura</div>
                            </div>
                            <img src="{{ asset('img/animals.svg') }}" alt="..." style="width: 8rem">
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-5">
              
                <a class="card lift h-100" href="{{ route('gestion-corrales') }}">
                    <div class="card-body d-flex justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <img src="{{ asset('img/book.svg') }}" alt="..." style="width: 4rem">
                                <h5>Gestión Corrales</h5>
                                <div class="text-muted small">Guarda tus animales de forma segura</div>
                            </div>
                            <img src="{{ asset('img/box.svg') }}" alt="..." style="width: 8rem">
                        </div>
                    </div>
                </a>

            </div>
            <br><br>
         
          </div>
          <br><br>
          <div class="row justify-content-center">
            <div class="col-5">
              
                <a class="card lift h-100" href="{{ route('asignacion-corrales') }}">
                    <div class="card-body d-flex justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <img src="{{ asset('img/book.svg') }}" alt="..." style="width: 4rem">
                                <h5>Asignación Corrales</h5>
                                <div class="text-muted small">Registra tus animales de forma segura</div>
                            </div>
                            <img src="{{ asset('img/animals.svg') }}" alt="..." style="width: 8rem">
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-5">
              
                <a class="card lift h-100" href="{{ route('visualizar-animales') }}">
                    <div class="card-body d-flex justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <img src="{{ asset('img/book.svg') }}" alt="..." style="width: 4rem">
                                <h5>Visualizar Animales</h5>
                                <div class="text-muted small">Guarda tus animales de forma segura</div>
                            </div>
                            <img src="{{ asset('img/box.svg') }}" alt="..." style="width: 8rem">
                        </div>
                    </div>
                </a>
            
            </div> 
            <br><br>
         
          </div>



</div>
@endsection


{{--  
 --}}