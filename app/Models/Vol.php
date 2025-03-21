<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    /** @use HasFactory<\Database\Factories\VolFactory> */
    use HasFactory;
    protected $fillable = ['numero_vol', 'aeroport_depart_id', 'aeroport_arrivee_id', 'date_heure_depart', 'date_heure_arrivee', 'statut', 'prix'];
    protected $table = 'vols';

    public function AeroportDepart(){
        return $this->belongsTo(Aeroport::class, 'aeroport_depart_id');
    }
    public function AeroportArrivee(){
        return $this->belongsTo(Aeroport::class, 'aeroport_arrivee_id');
    }


}
