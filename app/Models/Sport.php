<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function teams(){
        return $this->hasMany(Team::class);
    }

    public function categories(){
        return $this->hasMany(Categori::class);
    }

    public function matches(){
        return $this->hasMany(Matches::class);
    }

    public function players(){
        return $this->hasMany(Player::class);
    }
}
