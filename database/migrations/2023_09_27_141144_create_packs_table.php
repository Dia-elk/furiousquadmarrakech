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
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Vehicle::class,'vehicle_id')->constrained('vehicles');
            $table->string('slug')->unique();
            $table->double('passenger_price');
            $table->double('child_price');
            $table->string('duration');
            $table->double('price');
            $table->string('name');
            $table->boolean('dinner')->default(false);
            $table->boolean('pictures')->default(false);
            $table->boolean('tea')->default(false);
            $table->boolean('pick_up')->default(false);
            $table->boolean('private_pick_up')->default(false);
            $table->boolean('lunch')->default(false);
            $table->boolean('risk_insurance')->default(false);
            $table->boolean('equipments')->default(false);
            $table->boolean('desert_scarf')->default(false);
            $table->boolean('drift')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packs');
    }
};
