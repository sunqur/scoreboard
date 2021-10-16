<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\GameRepo;
use App\Http\Controllers\Controller;


class GamesController extends Controller
{
  public function GetGames()
  {
    $gameRepository = new GameRepo();

    $games = $gameRepository->GetGames();

    return $games;
  }
}
