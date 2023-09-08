<?php

namespace App\Models;

use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Http;

class DeliveryService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'delivery_endpoint',
    ];

    public function deliveries(): HasMany
    {
        return $this->hasMany(Delivery::class);
    }

    public function sendParcel(Delivery $delivery): void
    {
        try {
            $response = Http::timeout(1)->post($this->delivery_endpoint, $delivery->attributes);
            if ($response->successful()) {
                $delivery->delivered_date = Carbon::now();
                $delivery->save();
            }
        } catch (Exception $e) {
            // ¯\_(ツ)_/¯
            // тут нужно уведомить отправителя и\или администратора что отправить посылку не получилось
        }
    }
}
