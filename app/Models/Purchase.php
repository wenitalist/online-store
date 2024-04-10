<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property int $user_id
 * @property bool $paid
 * @property bool $received
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|Product $product
 */
class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';
    
    protected $fillable = [
        'user_id',
        'paid',
        'received'
    ];

    protected $attributes = [
        'paid' => false,
        'received' => false
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'purchase_items');
    }
}
