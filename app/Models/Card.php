<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'card';

    public $timestamps = false;

    protected $fillable = [
        'card_number',
        'cpf_client',
        'card_expire_date',
        'cvv_card',
        'id_client',
    ];

    public function payment(): hasOne{
        return $this->hasMany(Payment::class, 'id_payment');
    }

    public function client(): hasOne{
        return $this->belongsTo(Client::class, 'id_client');
    }
}
