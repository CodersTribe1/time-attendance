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
        Schema::create('trainees_info', function (Blueprint $table) {
            $table->id();
            $table->string('user_type')->default('trainee');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->unsignedInteger('contact_num');
            $table->string('email');
            $table->string('sex');
            $table->date('birthday');
            $table->string('uniqueid');
            $table->string('photo',300)->nullable();
            $table->string('grade_completed');
            $table->string('nationality');
            $table->string('civil_status');
            $table->string('scholarship');
            $table->string('training_status')->default('active');
            $table->string('client_classification')->default('unemployed');
            $table->integer('age');
            $table->unsignedInteger('batch_number');
            $table->string('street');
            $table->string('barangay');
            $table->string('monicipality');
            $table->string('district');
            $table->string('province');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainee_info');
    }
};
