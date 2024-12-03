<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $primaryKey = 'id_game';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id_game',
        'name',
        'type',
        'price',
        'discount'
    ];

    public $timestamps = false;
}
