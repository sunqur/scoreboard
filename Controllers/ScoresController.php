<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repo\ScoreRepo;
use App\Models\GameModels;
use App\Models\ScoreModels;
use App\Models\User;

class ScoresController extends Controller
{
  public function Get_scoreboard(Request $request)
  {
      $data = $request->json()->all();
      $game_id = $data['game_id'];

      $scoreRepository = new ScoreRepo();

      $response = $scoreRepository->Get_scoreboard($game_id);

      return $response;
  }

  public function Add_score(Request $request)
  {
      $data = $request->json()->all();

      $game_id = $data['game_id'];
      $user_id = $data['user_id'];
      $score = $data['score'];

      $scoreRepository = new ScoreRepo();

      $response = $scoreRepository->Add_score($game_id, $user_id, $score);

      return $response;
  }
}
