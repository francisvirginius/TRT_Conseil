<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'UTILISATEUR';
    protected $fillable = ['NOM', 'PRENOM', 'EMAIL'];
}
