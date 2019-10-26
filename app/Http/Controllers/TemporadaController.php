<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class TemporadaController extends Controller
{
    public function index($serieId)
    {
        $serie = Serie::find($serieId);
        return view('temporada.index', ['serie' => $serie,  'temporadas' => $serie->temporadas]);
    }
}
