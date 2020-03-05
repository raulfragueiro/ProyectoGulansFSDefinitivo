<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Players;
use App\NextMatch;
use App\Resultado;
use App\Clasificacion;

class PlayersController extends Controller
{
    public function index(){
        $jugadores = Players::orderBy('goles', 'desc')->paginate(5);
        $partidos = NextMatch::orderBy('fecha', 'desc')->paginate(1);
        $resultados = Resultado::orderBy('fecha', 'desc')->paginate(3);
        $clasificacion = Clasificacion::orderBy('puntos', 'desc')->get();
        return view('welcome',compact('jugadores', 'partidos', 'resultados', 'clasificacion'));
    }

    public function stats(){
        $jugadores = Players::orderBy('id', 'asc')->get();
        return view('stats',compact('jugadores'));
    }

    public function plantilla(){
        $jugadores = Players::orderBy('id', 'asc')->get();
        return view('plantilla',compact('jugadores'));
    }

    public function liga(){
        $clasificacion = Clasificacion::orderBy('puntos', 'desc')->get();
        return view('liga',compact('clasificacion'));
    }

}
