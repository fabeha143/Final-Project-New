<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Doctors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doc_fname');
            $table->string('doc_lname');
            $table->date('doc_date_of_birth');
            $table->string('doc_gender');
            $table->bigInteger('doc_phone');
            $table->string('doc_email');
            $table->string('doc_address');
            $table->string('doc_files');
            $table->string('doc_biography');
            $table->foreignId('doc_department')->constrained('departments');
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
