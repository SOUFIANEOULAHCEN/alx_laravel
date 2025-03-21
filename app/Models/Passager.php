<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    /** @use HasFactory<\Database\Factories\PassagerFactory> */
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'email', 'telephone', 'passport'];
    protected $table = 'passagers';
}

