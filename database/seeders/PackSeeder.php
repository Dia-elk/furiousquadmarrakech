<?php

namespace Database\Seeders;

use App\Enum\VehicleEnum;
use App\Models\Pack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // BUGGY PACKS

        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::BUGGY ,
            'duration' => '2h',
            'price' => 99.99,
            'name' => 'Adventure Explorer Buggy Pack',
            'dinner'=> false ,
            'pictures'=> true ,
            'tea'=> true ,
            'pick_up'=> true ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> true ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::BUGGY ,
            'duration' => '1/2 Day',
            'price' => 149.99,
            'name' => 'VIP Buggy Safari Pack',
            'dinner'=> true ,
            'pictures'=> true ,
            'tea'=> false ,
            'pick_up'=> true ,
            'private_pick_up'=> true ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> true ,
            'desert_scarf'=> true ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::BUGGY ,
            'duration' => '1/2 Day',
            'price' => 279.99,
            'name' => 'Family Fun Buggy Pack',
            'dinner'=> true ,
            'pictures'=> true ,
            'tea'=> true ,
            'pick_up'=> true ,
            'private_pick_up'=> true ,
            'lunch'=> true ,
            'risk_insurance'=> true ,
            'equipments'=> true ,
            'desert_scarf'=> true ,
            'drift'=> true ,
        ]);

      // QUAD PACKS

        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::QUAD ,
            'duration' => '2h',
            'price' => 29.99,
            'name' => 'Quad Thrill Seeker Pack',
            'dinner'=> false ,
            'pictures'=> true ,
            'tea'=> true ,
            'pick_up'=> true ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> true ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::QUAD ,
            'duration' => '1/2 Day',
            'price' => 49.59,
            'name' => 'Quad Explorer Pack',
            'dinner'=> true ,
            'pictures'=> true ,
            'tea'=> true ,
            'pick_up'=> true ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> true ,
            'equipments'=> true ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::QUAD ,
            'duration' => '1/2 Day',
            'price' => 149.99,
            'name' => 'Family Fun Quad Pack',
            'dinner'=> true ,
            'pictures'=> true ,
            'tea'=> true ,
            'pick_up'=> true ,
            'private_pick_up'=> true ,
            'lunch'=> true ,
            'risk_insurance'=> true ,
            'equipments'=> true ,
            'desert_scarf'=> true ,
            'drift'=> true ,
        ]);

        //MOTOCROSS PACKS

        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::MOTOCROSS ,
            'duration' => '1h30',
            'price' => 49.99,
            'name' => 'Motocross Adrenaline Pack',
            'dinner'=> false ,
            'pictures'=> false ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> true ,
            'desert_scarf'=> true ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::MOTOCROSS ,
            'duration' => '1/2 Day',
            'price' => 49.99,
            'name' => 'Motocross Pro Experience',
            'dinner'=> true ,
            'pictures'=> true ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> true ,
            'desert_scarf'=> true ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::MOTOCROSS ,
            'duration' => '1/2 Day',
            'price' => 49.99,
            'name' => 'Motocross Family Fun Pack',
            'dinner'=> true ,
            'pictures'=> true ,
            'tea'=> true ,
            'pick_up'=> true ,
            'private_pick_up'=> true ,
            'lunch'=> true ,
            'risk_insurance'=> false ,
            'equipments'=> true ,
            'desert_scarf'=> true ,
            'drift'=> true ,
        ]);

    }
}
