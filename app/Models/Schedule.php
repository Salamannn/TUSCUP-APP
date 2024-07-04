<?php

// app/Models/Schedule.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['match_id', 'date', 'time'];

    public function match()
    {
        return $this->belongsTo(Matches::class);
    }
}

