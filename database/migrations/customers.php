<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customerName',50)->unique();
            $table->string('customerLastName',50);
            $table->string('customerFirstName',50);
            $table->string('phone',50);
            $table->string('addressLine1',50);
            $table->string('addressLine2',50);
            $table->string('state',100);
            $table->string('postalCode',50);
            $table->string('country',100);
            $table->string('salesRepEmployeeNumber',50);
            $table->string('creditLimit',50);
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
        Schema::dropIfExists('offices');
    }
}
