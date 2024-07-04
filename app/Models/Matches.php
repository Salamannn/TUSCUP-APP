<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matches extends Model
{
    protected $fillable = ['sport_id', 'category_id', 'team1_id', 'team2_id', 'winner_team_id'];

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function category()
    {
        return $this->belongsTo(Categori::class);
    }

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    public function winnerTeam()
    {
        return $this->belongsTo(Team::class, 'winner_team_id');
    }

    public function sets()
    {
        return $this->hasMany(Set::class);
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }
}

