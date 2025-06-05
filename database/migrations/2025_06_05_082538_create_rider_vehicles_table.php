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
        Schema::create('rider_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rider_id')->constrained()->onDelete('cascade');
            $table->string('vehicle_type');
            $table->string('vehicle_brand');
            $table->string('plate_number');
            $table->year('manufacture_year');
            $table->string('operation_card_number');
            $table->string('vehicle_insurance_company');
            $table->date('vehicle_insurance_expiry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rider_vehicles');
    }
};
