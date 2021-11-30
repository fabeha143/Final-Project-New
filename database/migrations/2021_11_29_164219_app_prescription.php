<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppPrescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('app_prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('pres_disease');
            $table->string('appointment_id');
            $table->string('weeks');
            $table->date('from_date');
            $table->date('till_date');
            $table->bigInteger('dosage');
            $table->string('patient_cat');
            $table->longText('description');
            $table->foreignId('medicines')->constrained('medicines');
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
