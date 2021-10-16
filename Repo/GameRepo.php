<?php

namespace App\Repo;

use App\Models\GameModels;
use Carbon\Carbon;

class GameRepo {

    CONST CACHE_KEY = 'GAMES';

    public function Get_games() {

      $cacheKey = 'all';
      $key = $this->GetCacheKey($cacheKey);

      $gameModel = new GameModels();

      $games = cache()->remember($cacheKey, Carbon::now()->addMinutes(5), function() use($gameModel) {
        return $gameModel->get();
      });

      $response = [];

      foreach($games as $game) {

        $gameUsers = [];

        foreach ($game->score as $score) {
          $gameUsers[] = $score->user_id;
        };

        $uniqueUsers = collect($gameUsers)->unique()->values()->all();
        $total_play_count = count($uniqueUsers);

        $response[] = [
          'id' => $game->id,
          'title' => $game->title,
          'unique_users' => $uniqueUsers,
          'total_play_count' => $total_play_count
        ];
      }

      return $response;
    }

    public function GetCacheKey($key) {
        $key = strtoupper($key);

        return self::CACHE_KEY .".$key";
    }
}
