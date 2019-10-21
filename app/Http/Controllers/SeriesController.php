<?php

namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
        return view('series.index', ['series' => Serie::all()]);
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
        $serie = Serie::create($request->all());
        return redirect()->route('serie.index');
    }
}
