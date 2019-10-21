<?php

namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
        $series = ["Walking Dead", "La Casa de Papel", "Titans", "Breaking Bad"];
        return view('series.index', compact('series'));
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
        $serie = new Serie($request->all());
        var_dump($serie->save());
    }
}
