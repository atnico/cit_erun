<?php

namespace App\Models;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Environnement extends Model
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
}
