<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GameModels;
use App\Models\User;



class ScoreModels extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at'];

    public function game()
    {
        return $this->hasOne('App\Models\GameModels');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
