<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Agenda;
use Illuminate\Http\Request;

class BuscaController extends Controller
{

    public function index()
    {
        $configs = Config::where('tipo', 'Index')->get();
        $agendas = Agenda::where('dt_podcast', '>=', now())->get();
        $epsodios = Agenda::where('dt_podcast', '<', now())->get();
        return ['configs' => $configs, 'agendas' => $agendas, 'epsodios' => $epsodios];
    }

}
