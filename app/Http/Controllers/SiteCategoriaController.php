<?php

namespace App\Http\Controllers;

use App\Models\SiteCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SiteCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteCategorias = SiteCategoria::all();
        foreach ($siteCategorias as $key => $siteCateg) {
            $siteCategorias[$key]->site = $siteCateg->site()->first();
            $siteCategorias[$key]->categoria = $siteCateg->categoria()->first();
        }
        return $siteCategorias;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siteCategoria = new SiteCategoria;
        $siteCategoria->site_id = $request->site_id;
        $siteCategoria->categoria_id = $request->categoria_id;
        $siteCategoria->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteCategoria  $siteCategoria
     * @return \Illuminate\Http\Response
     */
    public function show(SiteCategoria $siteCategoria)
    {
        return $siteCategoria;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteCategoria  $siteCategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteCategoria $siteCategoria)
    {
        $siteCategoria->site_id = $request->site_id;
        $siteCategoria->categoria_id = $request->categoria_id;
        $siteCategoria->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteCategoria  $siteCategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteCategoria $siteCategoria)
    {
        $siteCategoria->delete();
    }
}
