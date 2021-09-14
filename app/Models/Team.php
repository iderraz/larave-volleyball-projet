<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = "team";

    protected $fillable = ['nom', "ville", "pays", "max", "att", "ct", "dc", "rp", "continent_id"];

    public function continent(){
        return $this->belongsTo(Continent::class);
    }

    public function player(){
        return $this->hasMany(Player::class);
    }
}