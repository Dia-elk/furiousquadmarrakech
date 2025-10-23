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
            'vehicle_id' => VehicleEnum::BUGGY,
            'slug' => 'adventure-explorer-buggy-pack',
            'passenger_price' => 159.99,
            'child_price' => 79.99,
            'duration' => '2h',
            'price' => 899.99,
            'name' => 'Adventure Explorer Buggy Pack',
            'dinner' => false,
            'pictures' => true,
            'tea' => true,
            'pick_up' => true,
            'private_pick_up' => false,
            'lunch' => false,
            'risk_insurance' => false,
            'equipments' => true,
            'desert_scarf' => false,
            'drift' => false,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::BUGGY,
            'slug' => 'vip-buggy-safari-pack',
            'passenger_price' => 159.99,
            'child_price' => 79.99,
            'duration' => '1/2 Day',
            'price' => 1299.99,
            'name' => 'VIP Buggy Safari Pack',
            'dinner' => false,
            'pictures' => true,
            'tea' => false,
            'pick_up' => true,
            'private_pick_up' => true,
            'lunch' => true,
            'risk_insurance' => false,
            'equipments' => true,
            'desert_scarf' => true,
            'drift' => false,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::BUGGY,
            'slug' => 'family-fun-buggy-pack',
            'passenger_price' => 159.99,
            'child_price' => 79.99,
            'duration' => '1/2 Day',
            'price' => 1499.99,
            'name' => 'Family Fun Buggy Pack',
            'dinner' => true,
            'pictures' => true,
            'tea' => true,
            'pick_up' => true,
            'private_pick_up' => true,
            'lunch' => false,
            'risk_insurance' => true,
            'equipments' => true,
            'desert_scarf' => true,
            'drift' => false,
        ]);

        // QUAD PACKS

        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::QUAD,
            'slug' => 'quad-thrill-seeker-pack',
            'passenger_price' => 99.99,
            'child_price' => 49.99,
            'duration' => '2h',
            'price' => 249.99,
            'name' => 'Quad Thrill Seeker Pack',
            'dinner' => false,
            'pictures' => true,
            'tea' => true,
            'pick_up' => true,
            'private_pick_up' => false,
            'lunch' => false,
            'risk_insurance' => false,
            'equipments' => true,
            'desert_scarf' => false,
            'drift' => false,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::QUAD,
            'slug' => 'quad-explorer-pack',
            'passenger_price' => 99.99,
            'child_price' => 49.99,
            'duration' => '1/2 Day',
            'price' => 599.99,
            'name' => 'Quad Explorer Pack',
            'dinner' => false,
            'pictures' => true,
            'tea' => true,
            'pick_up' => true,
            'private_pick_up' => false,
            'lunch' => true,
            'risk_insurance' => false,
            'equipments' => true,
            'desert_scarf' => false,
            'drift' => false,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::QUAD,
            'slug' => 'family-fun-quad-pack',
            'passenger_price' => 99.99,
            'child_price' => 49.99,
            'duration' => '1/2 Day',
            'price' => 799.99,
            'name' => 'Family Fun Quad Pack',
            'dinner' => true,
            'pictures' => true,
            'tea' => true,
            'pick_up' => true,
            'private_pick_up' => true,
            'lunch' => false,
            'risk_insurance' => true,
            'equipments' => true,
            'desert_scarf' => true,
            'drift' => false,
        ]);

        //MOTOCROSS PACKS

        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::MOTOCROSS,
            'slug' => 'motocross-adrenaline-pack',
            'duration' => '1h30',
            'passenger_price' => 0.00,
            'child_price' => 0.00,
            'price' => 699.99,
            'name' => 'Motocross Adrenaline Pack',
            'dinner' => false,
            'pictures' => false,
            'tea' => false,
            'pick_up' => false,
            'private_pick_up' => false,
            'lunch' => false,
            'risk_insurance' => false,
            'equipments' => true,
            'desert_scarf' => true,
            'drift' => false,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::MOTOCROSS,
            'slug' => 'motocross-pro-experience',
             'passenger_price' => 0.00,
            'child_price' => 0.00,
            'duration' => '1/2 Day',
            'price' => 1099.99,
            'name' => 'Motocross Pro Experience',
            'dinner' => true,
            'pictures' => true,
            'tea' => false,
            'pick_up' => false,
            'private_pick_up' => false,
            'lunch' => false,
            'risk_insurance' => false,
            'equipments' => true,
            'desert_scarf' => true,
            'drift' => false,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::MOTOCROSS,
            'slug' => 'motocross-family-fun-pack',
             'passenger_price' => 0.00,
            'child_price' => 0.00,
            'duration' => '1/2 Day',
            'price' => 1299.99,
            'name' => 'Motocross Family Fun Pack',
            'dinner' => true,
            'pictures' => true,
            'tea' => true,
            'pick_up' => true,
            'private_pick_up' => true,
            'lunch' => true,
            'risk_insurance' => false,
            'equipments' => true,
            'desert_scarf' => true,
            'drift' => true,
        ]);

        // BUGGY PACKS

        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::CAN_AM,
            'slug' => 'adventure-explorer-can-am-pack',
            'passenger_price' => 159.99,
            'child_price' => 79.99,
            'duration' => '2h',
            'price' => 899.99,
            'name' => 'Adventure Explorer Can-Am Pack',
            'dinner' => false,
            'pictures' => true,
            'tea' => true,
            'pick_up' => true,
            'private_pick_up' => false,
            'lunch' => false,
            'risk_insurance' => false,
            'equipments' => true,
            'desert_scarf' => false,
            'drift' => false,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::CAN_AM,
            'slug' => 'vip-can-am-safari-pack',
            'passenger_price' => 159.99,
            'child_price' => 79.99,
            'duration' => '1/2 Day',
            'price' => 1299.99,
            'name' => 'VIP Can-Am Safari Pack',
            'dinner' => false,
            'pictures' => true,
            'tea' => false,
            'pick_up' => true,
            'private_pick_up' => true,
            'lunch' => true,
            'risk_insurance' => false,
            'equipments' => true,
            'desert_scarf' => true,
            'drift' => false,
        ]);
        // *********************
        Pack::factory()->create([
            'vehicle_id' => VehicleEnum::CAN_AM,
            'slug' => 'family-fun-can-am-pack',
            'passenger_price' => 159.99,
            'child_price' => 79.99,
            'duration' => '1/2 Day',
            'price' => 1499.99,
            'name' => 'Family Fun Can-Am Pack',
            'dinner' => true,
            'pictures' => true,
            'tea' => true,
            'pick_up' => true,
            'private_pick_up' => true,
            'lunch' => false,
            'risk_insurance' => true,
            'equipments' => true,
            'desert_scarf' => true,
            'drift' => false,
        ]);

    }
}
