<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VehicleBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_brands')->insert([
            ['id' => 1, 'brand' => 'Yamaha', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'brand' => 'Suzuki', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'brand' => 'Dafra', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 4, 'brand' => 'BMW', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'brand' => 'Honda', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 6, 'brand' => 'Fiat', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'brand' => 'Toyota', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'brand' => 'Renault', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 9, 'brand' => 'Mercedes-Benz', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'brand' => 'Volkswagen', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'brand' => 'Ford', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 12, 'brand' => 'Volvo', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
