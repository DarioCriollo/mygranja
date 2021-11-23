@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-info" href="{{ route('inicio') }}" >Atras</a>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-5">
                <a class="btn btn-danger" href="{{ route('reporte-pdf') }}" >Descargar PDF</a>
                <br><br>
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


          <br><br>
          <div class="row justify-content-center">
            <div class="col-5">
              
            <div id="container"></div>
            <script type="text/javascript">
    var puntos =  <?php echo $puntos ?>;
   
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Corrales 2021'
        },
        subtitle: {
            text: ''
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total percent market share'
            }
    
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
            }
        },
    
        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },
    
        series: [
            {
                name: "Browsers",
                colorByPoint: true,
                data: puntos
                
            }
        ],
   
    });
</script>

            </div>
            <div class="col-5">
                <div class="row justify-content-center">
                    <h4><b>Media de edad Animales</b></h4>
                </div>
                <br><br>
                <div class="row justify-content-center">
                    <button class="btn btn-success" id="media"></button>
                </div>

            </div>

          </div>

</div>
@endsection
@section('scripts')
<script src="{{ asset('/js/animales.js') }}"></script>
@endsection