<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laptop::create([
            'Brand' => 'asus',
            'Model' => 'nabfaskjf',
            'Processor' => 'balallala',
            'Ram' => 8,
        ]);
    }
}
