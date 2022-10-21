<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userteam extends Model
{
    use HasFactory;

    protected $fillable = [
         'idUser',
         'idTeam'
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'idUser');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'idTeam');
    }
}
