<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'sport_id', 'category_id'];

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function category()
    {
        return $this->belongsTo(Categori::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function matchesAsTeam1()
    {
        return $this->hasMany(Matches::class, 'team1_id');
    }

    public function matchesAsTeam2()
    {
        return $this->hasMany(Matches::class, 'team2_id');
    }
}
