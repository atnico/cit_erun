<?php

namespace App\Models;

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


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function environnement()
    {
        return $this->belongsTo(Environnement::class);
    }

    public function inscriptions()
    {
        return $this->belongsToMany(User::class, 'inscriptions')
                ->withPivot('valide');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
