<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $primaryKey = 'item_id';
    public $timestamps = true;

    protected $fillable = 
    [
        'item_type_id',
        'brand_id',
        'item_name',
        'item_stock',
        'item_price',
        'item_description',
    ];
}
