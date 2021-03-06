<?php

namespace App\Http\Controllers;

use App\TipoAnimal;
use Illuminate\Http\Request;

class TipoAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoAnimal::all();
        return response()->json(['data'=>$tipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\TipoAnimal  $tipoAnimal
     * @return \Illuminate\Http\Response
     */
    public function show(TipoAnimal $tipoAnimal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoAnimal  $tipoAnimal
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoAnimal $tipoAnimal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoAnimal  $tipoAnimal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoAnimal $tipoAnimal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoAnimal  $tipoAnimal
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoAnimal $tipoAnimal)
    {
        //
    }
}
