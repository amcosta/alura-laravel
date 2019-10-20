<?php

namespace App\Http\Controllers;


class SeriesController extends Controller
{
    public function index() {
        $series = ["Walking Dead", "La Casa de Papel", "Titans", "Breaking Bad"];

        $lista = array_reduce($series, function($string, $serie) {
            $string .= "<li>$serie</li>";
            return $string;
        }, "");

        return "<ul>$lista</ul>";
    }
}
