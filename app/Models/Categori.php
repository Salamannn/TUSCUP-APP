<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    use HasFactory;

    public function sports(){
        return $this->belongsTo(Sport::class);
    }

    public function players(){
        return $this->belongsTo(Player::class);
    }
}
