<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_fname');
            $table->string('emp_lname');
            $table->string('emp_email');
            $table->string('emp_gender');
            $table->date('emp_joining_date');
            $table->integer('emp_phone');
            $table->string('emp_address');
            $table->foreignId('role_id')->constrained('employee_roles');
            $table->timestamps();
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
