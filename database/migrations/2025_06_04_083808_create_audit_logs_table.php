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
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained('rider_performance_reports')->onDelete('cascade');
            $table->enum('action', ['create', 'update', 'delete']);
            $table->text('changes')->nullable();
            $table->foreignId('performed_by')->constrained('users')->onDelete('restrict');
            $table->timestamp('performed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
    }
};
