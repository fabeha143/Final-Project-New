<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Appointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('appointments');
        Schema::create('appointments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('patient_name');
            $table->string('patient_category');
            $table->date('patient_dob');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->foreignId('department')->constrained('departments');
            $table->foreignId('doctor_name')->constrained('doctors');
            $table->string('status');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
