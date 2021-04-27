<?php

namespace App\Http\Controllers;

use App\Card;
use App\Level;
use App\Score;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        $cards = Card::all();
        return view('card', [
            'levels' => $levels,
            'cards' => $cards
        ]);
    }

    public function level()
    {
        $levels = Level::all();
        return view('level', compact('levels'));
    }

    public function score()
    {
        $scores = Score::all();
        return view('score', compact('scores'));
    }
}
