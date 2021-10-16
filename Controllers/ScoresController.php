<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repository\ScoreRepo;
use App\Models\GameModels;
use App\Models\ScoreModels;
use App\Models\User;

class ScoresController extends Controller
{
  public function GetScoreboard(Request $request)
  {
      $data = $request->json()->all();
      $game_id = $data['game_id'];

      $scoreRepository = new ScoreRepo();

      $response = $scoreRepository->GetScoreboard($game_id);

      return $response;
  }

  public function AddScore(Request $request)
  {
      $data = $request->json()->all();

      $game_id = $data['game_id'];
      $user_id = $data['user_id'];
      $score = $data['score'];

      $scoreRepository = new ScoreRepository();

      $response = $scoreRepository->AddScore($game_id, $user_id, $score);

      return $response;
  }
}
