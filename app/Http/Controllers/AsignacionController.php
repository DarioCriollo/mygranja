<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Animal;
use App\Corral;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animales = Animal::all()->where('estado','A');
        $corrales = Corral::all()->where('estado','A');
        return view('asignacion-corrales')->with('animales',$animales)->with('corrales',$corrales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->except('_token');

        $corral = Corral::find($data['corral']);

        $lista = DB::table('corrals')
        ->join('asignacions', 'corrals.id', '=', 'asignacions.corral')
        ->join('animals', 'animals.id', '=', 'asignacions.animal')
        ->where('corrals.id', $data['corral'])
        ->get();
        $sum =0;
        foreach ($lista as $list){
            $sum +=$list->peso;
        }
        $total = $sum/1000;      

        if($corral->capacidad > $total){
            $asignacion = new Asignacion();
            $asignacion->corral = $data['corral'];
            $asignacion->animal = $data['animal'];
            $asignacion->save();
            $animal = Animal::find($data['animal']);
            $animal->estado = 'I';
            $animal->save();

            return redirect()->back()->with('message', 'Registro Exitoso');

        }else{
            $corral = Corral::find($data['corral']);
            $corral->estado = 'I';
            $corral->save();
            return redirect()->back()->with('error', 'El Corral se encuentra lleno');
        }

    }

}
