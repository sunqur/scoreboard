<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameModels extends Model
{
  protected $hidden = ['created_at', 'updated_at'];

  public function score()
  {
      return $this->hasMany('App\Score');
  }
}
