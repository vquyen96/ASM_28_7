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
            $table->increments('pro_id');
            $table->string('pro_name');
            $table->string('pro_img');
            $table->text('pro_detail');
            $table->tinyInteger('pro_status');
            $table->integer('pro_cate_id')->unsigned();
            $table->foreign('pro_cate_id')
                ->references('cate_id')
                ->on('cates')
                ->onDelete('cascade');
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
