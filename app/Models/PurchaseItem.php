<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $purchase_id
 * @property int $product_id
 * @property int $quantity
 * @property int $sum_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class PurchaseItem extends Model
{
    use HasFactory;

    protected $table = 'purchase_items';
    
    protected $fillable = [
        'purchase_id',
        'product_id',
        'quantity',
        'sum_price'
    ];
}
