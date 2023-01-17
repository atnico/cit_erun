<?php

namespace App\Models;

use App\Models\User;
use App\Models\Ville;
use App\Models\Niveau;
use App\Models\Inscription;
use App\Models\Environnement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;

protected $guarded = [];
    

protected $fillable = [
        'user_id',
        'nom',
        'image',
        'description',
        'nb_participants'
    ];


    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function environnement()
    {
        return $this->belongsTo(Environnement::class);
    }

    public function niveaux()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function inscription()
    {
        return $this->hasMany(Inscription::class);
    }
}
