<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Config::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        //    'campo' => ['unique:Configs,campo', 'required'],
            'valor' => 'required',
        ]);

        $config = new Config;
        $config->tipo = $request->tipo;
        $config->campo = $request->campo;
        $config->valor = $request->valor;
        $config->complemento = $request->complemento;
        $config->save();
        return $config;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        return $config;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        $config->tipo = $request->tipo;
        $config->campo = $request->campo;
        $config->valor = $request->valor;
        $config->complemento = $request->complemento;
        $config->save();
        return $config;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        $config->delete();
        return $config;
    }
}
