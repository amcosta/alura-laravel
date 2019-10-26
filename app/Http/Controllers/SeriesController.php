<?php

namespace App\Http\Controllers;


use App\Episodio;
use App\Http\Requests\SerieFormRequest;
use App\Serie;
use App\Temporada;
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
        $serie = Serie::create(['nome' => $request->get('nome')]);

        for ($i = 1; $i <= $request->get('qtd_temporadas'); $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);

            for ($j = 1; $j <= $request->get('ep_por_temporada'); $j++) {
                $temporada->episodios()->create(['numero' => $j]);
            }
        }

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
