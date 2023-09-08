<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('sender_address');
            $table->string('delivery_address');

            $table->foreignId('delivery_service_id')->constrained()->cascadeOnDelete();

            $table->integer('parcel_width');
            $table->integer('parcel_height');
            $table->integer('parcel_length');
            $table->integer('parcel_weight');

            $table->datetime('delivered_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
