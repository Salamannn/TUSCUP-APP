<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'team_id', 'sport_id', 'category_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function category()
    {
        return $this->belongsTo(Categori::class);
    }
}
