<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceHistory extends Model
{
    protected $table = 'price_history';
    protected $primaryKey = 'history_id';
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'old_price',
        'new_price',
        'changed_at',
        'changed_by',
    ];
}
