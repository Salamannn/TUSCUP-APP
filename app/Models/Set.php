<?php

// app/Models/Set.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    protected $fillable = ['match_id', 'set_number', 'team1_score', 'team2_score'];

    public function match()
    {
        return $this->belongsTo(Matches::class);
    }
}

