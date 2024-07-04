<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['match_id', 'team1_score', 'team2_score'];

    public function match()
    {
        return $this->belongsTo(Matches::class);
    }
}

