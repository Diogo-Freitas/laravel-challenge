<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            ['id' => 1, 'vehicle' => 'Motorcycle', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'vehicle' => 'Car', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'vehicle' => 'Truck', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
