<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'phone_number',
        'email',
        'sender_address',
        'delivery_address',
        'delivery_service_id',
        'delivered_date',
        'parcel_width',
        'parcel_height',
        'parcel_length',
        'parcel_weight',
    ];

    public function deliveryService(): BelongsTo
    {
        return $this->belongsTo(DeliveryService::class);
    }
}
