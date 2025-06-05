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
        Schema::create('rider_performance_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rider_id')->constrained()->onDelete('cascade');
            $table->foreignId('city_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('vehicle_id')->nullable()->constrained()->nullOnDelete();
            $table->date('report_date');

            $table->integer('batch_number')->nullable();
            $table->integer('tga_status')->nullable();
            $table->text('error_codes')->nullable();
            $table->integer('shifts_count')->nullable();
            $table->integer('working_days')->nullable();
            $table->decimal('planned_working_hours', 5, 2)->nullable();
            $table->decimal('actual_working_hours', 5, 2)->nullable();
            $table->decimal('avg_working_hours_per_day', 5, 2)->nullable();
            $table->string('attendance_rate', 10)->nullable();
            $table->decimal('break_hours', 5, 2)->nullable();
            $table->decimal('lost_hours', 5, 2)->nullable();
            $table->string('acceptance_rate', 10)->nullable();
            $table->string('contact_rate', 10)->nullable();
            $table->integer('no_shows')->nullable();
            $table->string('no_show_percent', 10)->nullable();
            $table->integer('notified_deliveries')->nullable();
            $table->integer('completed_deliveries')->nullable();
            $table->integer('accepted_deliveries')->nullable();
            $table->integer('not_accepted_deliveries')->nullable();
            $table->integer('stacked_deliveries')->nullable();
            $table->integer('declined_deliveries')->nullable();
            $table->integer('cancelled_deliveries')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rider_performance_reports');
    }
};
