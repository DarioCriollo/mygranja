<?php

namespace App\Http\Controllers;

use App\Corral;
use App\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CorralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animales = Animal::all();
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
        return view('lista-animales')->with('corrales',$corrales);
    }

    
    public function listaAnimales(Request $request)
    {
        //return ($request->corral);
        $lista = DB::table('corrals')
        ->join('animals', 'corrals.animal', '=', 'animals.id')
        ->where('corrals.id', $request->corral)
        ->get();

        return $lista;
    }     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
