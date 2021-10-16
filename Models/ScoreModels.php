<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreModels extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at'];

    public function game()
    {
        return $this->hasOne('App\Game');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
