<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'transaction_id';
    public $timestamps = true;

    protected $fillable = 
    [
        'transaction_status_id',
        'item_id',
        'user_id',
        'transaction_arrive_date',
        'transaction_rent_duration',
    ];
}
