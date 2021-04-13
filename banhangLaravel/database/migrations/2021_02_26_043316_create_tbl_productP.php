<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProductP extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_productP', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->string('prodcut_name');
            $table->text('product_desc');
            $table->text('product_content');
            $table->string('product_price');
            $table->string('product_img');
            $table->integer('product_status');
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
        Schema::dropIfExists('tbl_productP');
    }
}
