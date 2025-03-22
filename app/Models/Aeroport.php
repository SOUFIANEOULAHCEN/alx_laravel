<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeroport extends Model
{
    /** @use HasFactory<\Database\Factories\AeroportFactory> */
    use HasFactory;
    protected $fillable = ['nom', 'code_iata', 'ville', 'pays'];
    protected $table = 'aeroports';

    public function Vols()
    {
        return $this->hasMany(Vol::class);
    }


    public function VolsDepart()
    {
        return $this->hasMany(Vol::class, 'aeroport_depart_id');
    }

    public function VolsArrivee()
    {
        return $this->hasMany(Vol::class, 'aeroport_arrivee_id');
    }
}
