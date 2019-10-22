<?php

namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        return view('series.index', [
            'series' => Serie::all(),
            'mensagem' => $request->session()->get('mensagem')
        ]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
        $msg = sprintf("Serie %s criada  com sucesso!", $serie->nome);
        $request->session()->flash('mensagem', $msg);
        return redirect()->route('serie.index');
    }

    public function destroy(Request $request, $id)
    {
        $request->session()->flash('mensagem', "Serie removida com sucesso!");
        Serie::destroy($id);
        return redirect()->route('serie.index');
    }
}
