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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('lab_test_id');
            $table->string('medical_condition');
            $table->string('treatment');
            $table->string('visit_outcome');
            $table->tinyText('symptoms');
            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('CASCADE')->cascadeOnDelete();
            $table->foreign('staff_id')->references('id')->on('staffs')->onUpdate('CASCADE')->cascadeOnDelete();
            $table->foreign('lab_test_id')->references('id')->on('lab_tests')->onUpdate('CASCADE')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_records');
    }
};
