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
            'duration' => '1h30',
            'name' => 'Adventure Explorer Buggy Pack',
            'dinner'=> false ,
            'pictures'=> false ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> false ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::BUGGY ,
            'duration' => '1h30',
            'name' => 'VIP Buggy Safari Pack',
            'dinner'=> false ,
            'pictures'=> false ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> false ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::BUGGY ,
            'duration' => '1h30',
            'name' => 'Family Fun Buggy Pack',
            'dinner'=> false ,
            'pictures'=> false ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> false ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);

      // QUAD PACKS

        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::QUAD ,
            'duration' => '1h30',
            'name' => 'Quad Thrill Seeker Pack',
            'dinner'=> false ,
            'pictures'=> false ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> false ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::QUAD ,
            'duration' => '1h30',
            'name' => 'Quad Explorer Pack',
            'dinner'=> false ,
            'pictures'=> false ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> false ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::QUAD ,
            'duration' => '1h30',
            'name' => 'Family Fun Quad Pack',
            'dinner'=> false ,
            'pictures'=> false ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> false ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);

        //MOTOCROSS PACKS

        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::MOTOCROSS ,
            'duration' => '1h30',
            'name' => 'Motocross Adrenaline Pack',
            'dinner'=> false ,
            'pictures'=> false ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> false ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::MOTOCROSS ,
            'duration' => '1h30',
            'name' => 'Motocross Pro Experience',
            'dinner'=> false ,
            'pictures'=> false ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> false ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id'=> VehicleEnum::MOTOCROSS ,
            'duration' => '1h30',
            'name' => 'Motocross Family Fun Pack',
            'dinner'=> false ,
            'pictures'=> false ,
            'tea'=> false ,
            'pick_up'=> false ,
            'private_pick_up'=> false ,
            'lunch'=> false ,
            'risk_insurance'=> false ,
            'equipments'=> false ,
            'desert_scarf'=> false ,
            'drift'=> false ,
        ]);

    }
}
