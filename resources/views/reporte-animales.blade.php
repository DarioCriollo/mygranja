<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
   
  </head>
<body>
    <style>
        .padre {
            background-color: #e0f7fa;
            margin: 1rem;
            padding: 1rem;
            border: 2px solid white;
            /* IMPORTANTE */
            text-align: center;
            font-size: 12px;
          }
          header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 30px;
        }
    </style>
    
    <header>
        Lista de Animales
    </header>
    <br><br><br><br>

  <div class="card-body">
  <div class="row mb-4">

    
  <div class="col-6 col-md-3 col-sm-6 font-style" style="font-size:10px;">

   @foreach($corrales as $corral)
    <div class="padre">
        <h2>{{$corral->nombre}}</h2>
        @foreach ($animales as $animal)
            @if ($corral->id == $animal->corral)
                @if ($animal->tipo == 1)
                <div style="background: red">Nombre : {{$animal->nombre}} - Peso : {{$animal->peso}} - Edad : {{$animal->edad}}</div>
                @else
                <div>Nombre : {{$animal->nombre}} - Peso : {{$animal->peso}} - Edad : {{$animal->edad}}</div>
                @endif
            @endif
        @endforeach
    </div>
   @endforeach

</div>

<div class="col-6 col-md-3 col-sm-6 font-style " style="font-size:10px;">

    
  </div>
  <div class="col-6 col-md-4 offset-md-2 font-style" style="font-size:11px; ">

</div>
</div>

</div>


<div class="font-style"  style="font-size:10px; ">
  
  </div>

  <div class="row">
    <div class="col-6" style="font-size:15px;">

 </div>
  </div>


</body>
</html>