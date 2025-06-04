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
            $table->date('report_date');
            $table->foreignId('city_id')->constrained()->onDelete('restrict');
            $table->foreignId('vehicle_id')->constrained()->onDelete('restrict');
            $table->integer('batch_number')->nullable();
            $table->boolean('tga_status')->default(false);
            $table->string('error_codes')->default('0');

            // Working Hours Metrics
            $table->integer('shifts_count')->default(0);
            $table->integer('working_days')->default(0);
            $table->decimal('planned_working_hours', 8, 2)->default(0.00);
            $table->decimal('actual_working_hours', 8, 2)->default(0.00);
            $table->decimal('avg_working_hours_per_day', 8, 2)->default(0.00);
            $table->decimal('attendance_rate', 5, 2)->default(0.00);
            $table->decimal('break_hours', 8, 2)->default(0.00);
            $table->decimal('lost_hours', 8, 2)->default(0.00);

            // Delivery Metrics
            $table->decimal('acceptance_rate', 5, 2)->default(0.00);
            $table->decimal('contact_rate', 5, 2)->default(0.00);
            $table->integer('no_shows')->default(0);
            $table->decimal('no_show_percentage', 5, 2)->default(0.00);
            $table->integer('notified_deliveries')->default(0);
            $table->integer('completed_deliveries')->default(0);
            $table->integer('accepted_deliveries')->default(0);
            $table->integer('not_accepted_deliveries')->default(0);
            $table->integer('stacked_deliveries')->default(0);
            $table->integer('declined_deliveries')->default(0);
            $table->integer('cancelled_deliveries')->default(0);

            $table->foreignId('import_id')->nullable()->constrained('imports')->nullOnDelete();

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
