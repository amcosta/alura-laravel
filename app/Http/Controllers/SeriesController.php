<?php

namespace App\Http\Controllers;


class SeriesController extends Controller
{
    public function index() {
        $series = ["Walking Dead", "La Casa de Papel", "Titans", "Breaking Bad"];
        return view('series.index', compact('series'));
    }
    public function create() {
        return view('series.create');
    }
}
