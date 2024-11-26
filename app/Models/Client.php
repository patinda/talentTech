<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenoms',
        'numero_cnib',
        'date_delivrance',
        'date_expiration',
        'telephone_secondaire',
        'date_naissance',
        'lieu_naissance',
        'lieu_delivrance',
    ];

    // Relation avec Transaction
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}

