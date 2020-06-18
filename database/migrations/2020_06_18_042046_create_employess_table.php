<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employeeNumber')->unidue();
            $table->string('lastName');
            $table->string('firstName');
            $table->string('extension');
            $table->string('email', 100);
            $table->string('officeCode',50);
            $table->string('reportsTo',50);
            $table->string('jobTitle');
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
        Schema::dropIfExists('employess');
    }
}
