<?php

namespace App\Models;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Environnement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'nom'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }

    public function environnement()
    {
        return $this->hasMany(Environnement::class);
    }
}
