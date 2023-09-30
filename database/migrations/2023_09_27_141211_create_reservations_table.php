<?php

use App\Models\Customer;
use App\Models\Pack;
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
        Schema::create('reservations', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignIdFor(Pack::class,'pack_id')->constrained('packs');
            $table->foreignIdFor(Customer::class,'customer_id')->constrained('customers');
            $table->boolean('is_confirmed')->default(false);
            $table->string('name')->nullable();
            $table->string('country')->nullable();
            $table->date('reservation_date');
            $table->string('reservation_time');
            $table->integer('drivers');
            $table->integer('passengers');
            $table->integer('children');
            $table->double('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
