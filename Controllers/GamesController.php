<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\GameRepo;
use App\Http\Controllers\Controller;


class GamesController extends Controller
{
  public function Get_games()
  {
    $gameRepository = new GameRepo();

    $games = $gameRepository->Get_games();

    return $games;
  }
}
