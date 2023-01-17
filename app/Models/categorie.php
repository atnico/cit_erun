<?php

namespace App\Models;

use App\Models\User;
use App\Models\Niveau;
use App\Models\Evenement;
use App\Models\Environnement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'nom'
    ];

    public function evenement()
    {
        return $this->hasMany(Evenement::class);
    }

    public function environnement()
    {
        return $this->hasMany(Environnement::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function niveaux()
    {
        return $this->hasMany(Niveau::class);
    }
}
