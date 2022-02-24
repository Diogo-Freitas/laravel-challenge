<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VehicleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_models')->insert([
            ['id' => 1, 'brand_id' => 1, 'vehicle_id' => 1, 'model' => 'FAZER', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'brand_id' => 1, 'vehicle_id' => 1, 'model' => 'DT', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'brand_id' => 1, 'vehicle_id' => 1, 'model' => 'MT-03', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'brand_id' => 1, 'vehicle_id' => 1, 'model' => 'XJ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'brand_id' => 1, 'vehicle_id' => 1, 'model' => 'NEO', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 6, 'brand_id' => 2, 'vehicle_id' => 1, 'model' => 'BANDIT', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'brand_id' => 2, 'vehicle_id' => 1, 'model' => 'DL', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'brand_id' => 2, 'vehicle_id' => 1, 'model' => 'GS', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'brand_id' => 2, 'vehicle_id' => 1, 'model' => 'RF', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'brand_id' => 2, 'vehicle_id' => 1, 'model' => 'INTRUDER', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 11, 'brand_id' => 3, 'vehicle_id' => 1, 'model' => 'Speed', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'brand_id' => 3, 'vehicle_id' => 1, 'model' => 'Super', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'brand_id' => 3, 'vehicle_id' => 1, 'model' => 'Apache', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'brand_id' => 3, 'vehicle_id' => 1, 'model' => 'Roadwin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'brand_id' => 3, 'vehicle_id' => 1, 'model' => 'Smart', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 16, 'brand_id' => 4, 'vehicle_id' => 1, 'model' => 'X1', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'brand_id' => 4, 'vehicle_id' => 1, 'model' => 'S1000', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'brand_id' => 4, 'vehicle_id' => 1, 'model' => 'R 1100', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'brand_id' => 4, 'vehicle_id' => 2, 'model' => 'i8', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'brand_id' => 4, 'vehicle_id' => 2, 'model' => 'M5', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'brand_id' => 4, 'vehicle_id' => 2, 'model' => 'X5', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'brand_id' => 4, 'vehicle_id' => 2, 'model' => 'Z3', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 23, 'brand_id' => 5, 'vehicle_id' => 1, 'model' => 'Biz', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'brand_id' => 5, 'vehicle_id' => 1, 'model' => 'CG', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'brand_id' => 5, 'vehicle_id' => 1, 'model' => 'CBR', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'brand_id' => 5, 'vehicle_id' => 2, 'model' => 'Civic', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'brand_id' => 5, 'vehicle_id' => 2, 'model' => 'City', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'brand_id' => 5, 'vehicle_id' => 2, 'model' => 'Fit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'brand_id' => 5, 'vehicle_id' => 2, 'model' => 'HR-V', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 30, 'brand_id' => 6, 'vehicle_id' => 2, 'model' => 'Palio', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'brand_id' => 6, 'vehicle_id' => 2, 'model' => 'Uno', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'brand_id' => 6, 'vehicle_id' => 2, 'model' => 'Siena', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'brand_id' => 6, 'vehicle_id' => 2, 'model' => 'Bravo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'brand_id' => 6, 'vehicle_id' => 2, 'model' => 'Strada', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 35, 'brand_id' => 7, 'vehicle_id' => 2, 'model' => 'Corolla', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'brand_id' => 7, 'vehicle_id' => 2, 'model' => 'Etios', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'brand_id' => 7, 'vehicle_id' => 2, 'model' => 'Hilux', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 38, 'brand_id' => 8, 'vehicle_id' => 2, 'model' => 'Clio', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'brand_id' => 8, 'vehicle_id' => 2, 'model' => 'Duster', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'brand_id' => 8, 'vehicle_id' => 2, 'model' => 'Kwid', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 41, 'brand_id' => 8, 'vehicle_id' => 2, 'model' => 'Logan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'brand_id' => 8, 'vehicle_id' => 2, 'model' => 'Sandero', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 43, 'brand_id' => 9, 'vehicle_id' => 2, 'model' => 'Class A', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'brand_id' => 9, 'vehicle_id' => 2, 'model' => 'Class B', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 45, 'brand_id' => 9, 'vehicle_id' => 2, 'model' => 'Class C', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'brand_id' => 9, 'vehicle_id' => 3, 'model' => 'Acello', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 47, 'brand_id' => 9, 'vehicle_id' => 3, 'model' => 'Actros', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 48, 'brand_id' => 10, 'vehicle_id' => 2, 'model' => 'Amarok', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 49, 'brand_id' => 10, 'vehicle_id' => 2, 'model' => 'Gol', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 50, 'brand_id' => 10, 'vehicle_id' => 2, 'model' => 'Nivus', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 51, 'brand_id' => 10, 'vehicle_id' => 2, 'model' => 'Fox', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 52, 'brand_id' => 10, 'vehicle_id' => 2, 'model' => 'Fusca', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 53, 'brand_id' => 10, 'vehicle_id' => 3, 'model' => 'Delivery', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 54, 'brand_id' => 10, 'vehicle_id' => 3, 'model' => 'Meteor', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 55, 'brand_id' => 11, 'vehicle_id' => 2, 'model' => 'Bronco', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 56, 'brand_id' => 11, 'vehicle_id' => 2, 'model' => 'Focus', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 57, 'brand_id' => 11, 'vehicle_id' => 2, 'model' => 'Ka', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 58, 'brand_id' => 11, 'vehicle_id' => 2, 'model' => 'Mustang', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 59, 'brand_id' => 11, 'vehicle_id' => 3, 'model' => 'Cargo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 60, 'brand_id' => 11, 'vehicle_id' => 3, 'model' => 'F-MAXX', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 61, 'brand_id' => 12, 'vehicle_id' => 3, 'model' => 'FH 480', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 62, 'brand_id' => 12, 'vehicle_id' => 3, 'model' => 'FH 520', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 63, 'brand_id' => 12, 'vehicle_id' => 3, 'model' => 'VW 310', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('vehicle_vehicle_brand')->insert([
            ['brand_id' => 1, 'vehicle_id' => 1],
            ['brand_id' => 2, 'vehicle_id' => 1],
            ['brand_id' => 3, 'vehicle_id' => 1],
            ['brand_id' => 4, 'vehicle_id' => 1],
            ['brand_id' => 4, 'vehicle_id' => 2],
            ['brand_id' => 5, 'vehicle_id' => 1],
            ['brand_id' => 5, 'vehicle_id' => 2],
            ['brand_id' => 6, 'vehicle_id' => 2],
            ['brand_id' => 7, 'vehicle_id' => 2],
            ['brand_id' => 8, 'vehicle_id' => 2],
            ['brand_id' => 9, 'vehicle_id' => 2],
            ['brand_id' => 9, 'vehicle_id' => 3],
            ['brand_id' => 10, 'vehicle_id' => 2],
            ['brand_id' => 10, 'vehicle_id' => 3],
            ['brand_id' => 11, 'vehicle_id' => 2],
            ['brand_id' => 11, 'vehicle_id' => 3],
            ['brand_id' => 12, 'vehicle_id' => 3],
        ]);
    }
}
