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
        Schema::create('facilitators_info', function (Blueprint $table) {
            $table->id();
            $table->string('user_type')->default('facilitator');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->unsignedInteger('contact_num');
            $table->string('email');
            $table->string('sex');
            $table->date('birthday');
            $table->string('uniqueid');
            // $table->
            $table->string('photo',300)->nullable();
            $table->string('civil_status');
            $table->string('nationality');
            $table->unsignedInteger('age');
            $table->string('department');
            $table->string('street');
            $table->string('barangay');
            $table->string('municipality');
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
        Schema::dropIfExists('facilitators_info');
    }
};
