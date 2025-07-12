<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetails extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'price',
        'quantity',
        'product_id',
        'order_transaction_id',
    ];

    public function orderTransaction(): BelongsTo
    {
        return $this->belongsTo(OrderTransaction::class, 'order_transaction_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
