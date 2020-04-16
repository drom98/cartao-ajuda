<?php

namespace App\Http\Controllers;

use App\OpcaoCartao;
use Illuminate\Http\Request;

class OpcoesCartoesController extends Controller
{

    public function getOpcao($id)
    {
        return OpcaoCartao::find($id)->first();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\OpcaoCartao  $opcoesCartoes
     * @return \Illuminate\Http\Response
     */
    public function show(OpcaoCartao $opcoesCartoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OpcaoCartao  $opcoesCartoes
     * @return \Illuminate\Http\Response
     */
    public function edit(OpcaoCartao $opcoesCartoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OpcaoCartao  $opcoesCartoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OpcaoCartao $opcoesCartoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OpcaoCartao  $opcoesCartoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpcaoCartao $opcoesCartoes)
    {
        //
    }
}
