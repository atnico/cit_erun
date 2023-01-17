<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profil extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'nom'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
}
