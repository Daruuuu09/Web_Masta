<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBatch extends Model
{
    protected $primaryKey = 'batch_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
    'batch_id',
    'product_id',
    'quantity',
    'remaining_quantity',
    'purchase_price',
    'date_received',
    'expiry_date'
];
}
