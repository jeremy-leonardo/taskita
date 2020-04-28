<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $primaryKey = 'payment_id';
    public $timestamps = true;

    protected $fillable = 
    [
        'transaction_id',
        'payment_type_id',
        'payment_timestamp',
        'payment_ref',
    ];
}
