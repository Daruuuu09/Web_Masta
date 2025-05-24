<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryMovement extends Model
{
    protected $primaryKey = 'movement_id';
    
    protected $guarded = [];


    protected $fillable = [
        'batch_id',
        'product_id',
        'quantity',
        'movement_type',
        'movement_date',
        'reference',
        'notes',
    ];

    public $timestamps = true;
}
