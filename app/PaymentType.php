<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $table = 'payment_type';
    protected $primaryKey = 'payment_type_id';
    public $timestamps = true;

    protected $fillable = 
    [
        'payment_type_name', 
    ];
}
