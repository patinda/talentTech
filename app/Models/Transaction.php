<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'date',
        'type_transaction_id',
    ];

    // Relation avec Client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // Relation avec TypeTransaction
    public function typeTransaction()
    {
        return $this->belongsTo(TypeTransaction::class);
    }
}

