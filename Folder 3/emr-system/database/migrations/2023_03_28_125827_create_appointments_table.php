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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->text('clinical_notes');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('patient_id');
            $table->enum('status', ['pending', 'completed'])->default('pending');
            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('CASCADE')->cascadeOnDelete();
            $table->foreign('staff_id')->references('id')->on('staffs')->onUpdate('CASCADE')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
