<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('productscodes')->unique();
            $table->string('productName');
            $table->string('productLine')->unique();
            $table->string('productScale');
            $table->string('productVendor');
            $table->string('productDescription',50);
            $table->string('quanitilyInStock',50);
            $table->integer('buyPrice');
            $table->string('MSRP');
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
        Schema::dropIfExists('products');
    }
}
