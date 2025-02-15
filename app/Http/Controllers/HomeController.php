<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('home', compact('games'));
    }

    public function game(Game $game, $id)
    {
        $game = Game::find($id);
        return view('game', compact('game'));
    }
}
