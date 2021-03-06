<?php

namespace App\Http\Controllers;

use App\Corral;
use App\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class CorralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animales = Animal::all()->where('estado','A');
        return view('gestion-corrales')->with('animales',$animales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->except('_token');

        $corral = new Corral();
        $corral->nombre = $data['name'];
        $corral->capacidad = $data['capacidad'];
        $corral->detalle = $data['detalle'];
        $corral->estado = 'A';

        $corral->save();

        return redirect()->back()->with('message', 'Registro Exitoso');
        
    }

    public function corralesAnimales(Request $request)
    {
        $corrales = Corral::all();
        $puntos = [];

        foreach($corrales as $key => $qs){
            $query = "select count(corral) from asignacions where corral=?";
            $res = DB::connection('pgsql')->select($query,array($qs->id));
            $puntos []= ['name' => $qs->nombre, 'y' => $res[0]->count ];
        }

        return view('lista-animales')->with('corrales',$corrales)->with('puntos',json_encode($puntos));
    }

    
    public function listaAnimales(Request $request)
    {
        //return ($request->corral);
        $lista = DB::table('corrals')
        ->join('asignacions', 'corrals.id', '=', 'asignacions.corral')
        ->join('animals', 'animals.id', '=', 'asignacions.animal')
        ->where('corrals.id', $request->corral)
        ->get();

        return response()->json(['data'=>$lista]);
    }     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reporteAnimales(Request $request)
    {
        $corrales = Corral::all();
        $puntos = [];

        foreach($corrales as $key => $qs){
            $query = "select * from asignacions join animals on asignacions.animal=animals.id where asignacions.corral=?";
            $res = DB::connection('pgsql')->select($query,array($qs->id));
            $puntos []= [$res ];
        }

        // for ($i=0; $i<count($puntos); $i++){
        //     for($j=0; $j<count($puntos[$i][0]); $j++){
        //         print_r($puntos[$i][0][$j]->nombre);
        //         print_r($puntos[$i][0][$j]->corral);
        //         echo "<br>";
        //     }
        // }

        $animales = DB::table('corrals')
        ->join('asignacions', 'corrals.id', '=', 'asignacions.corral')
        ->join('animals', 'animals.id', '=', 'asignacions.animal')
        ->get();
        

       return PDF::loadView('reporte-animales', compact('corrales','animales'))->setPaper('A4')->stream();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Corral  $corral
     * @return \Illuminate\Http\Response
     */
    public function show(Corral $corral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corral  $corral
     * @return \Illuminate\Http\Response
     */
    public function edit(Corral $corral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corral  $corral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corral $corral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corral  $corral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corral $corral)
    {
        //
    }
}
