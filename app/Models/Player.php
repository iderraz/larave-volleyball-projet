<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = "player";

    protected $fillable = ['nom', "prenom", "phone", "email", "genre_id", "origine", "role_id", "equipe_id"];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }

    public function photo(){
        return $this->hasOne(Photo::class);
    }
}