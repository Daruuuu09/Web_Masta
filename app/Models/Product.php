<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'brand',
        'category',
        'price',
        'description',
        'image_path',
        'status',
    ];

    // Di Product.php model:
public function batches()
{
    return $this->hasMany(ProductBatch::class);
}
}

