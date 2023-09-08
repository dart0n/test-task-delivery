<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DeliveryService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DeliveryService::factory()->create([
            'name' => 'Новая почта',
            'slug' => 'novaposhta',
        ]);

        DeliveryService::factory()->create([
            'name' => 'Meest',
            'slug' => 'meest',
        ]);
    }
}
