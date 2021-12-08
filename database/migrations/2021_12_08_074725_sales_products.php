<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SalesProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        //
    
    public function up()
    {
        Schema::create('sales_products', function (Blueprint $table) {
            $table->id();
            $table->integer('qty');
            $table->foreignId('sale_id')->nullable();
            $table->foreignId('product_id')->nullable();
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
        Schema::dropIfExists('sales_products');

    }
}
