<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_produk', function (Blueprint $table) {
            $table->id('produk_id')->length(12)->unsigned()->autoIncrement();
            $table->integer('produk_sku_id')->length(12)->unsigned()->nullable();
            $table->integer('produk_parent_id')->length(12)->unsigned()->nullable();
            $table->integer('produk_category_id')->length(12)->unsigned()->nullable();
            $table->string('product_category_name', 50)->nullable();
            $table->string('product_name', 100);
            $table->float('product_price');
            $table->string('product_size', 10);
            $table->integer('product_stock')->length(12)->unsigned()->defult(0);
            $table->decimal('product_diskon_value', 15,2)->default(0.00)->nullable();
            $table->decimal('product_diskon_percent', 4,2)->default(0.00)->nullable();
            $table->float('product_purchase_price');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_produk');
    }
}