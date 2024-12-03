<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $fillable = [
        'email',
        'game',
        'code',
        'price',
        'qty',
        'total',
        'redeem_code'
    ];
}
