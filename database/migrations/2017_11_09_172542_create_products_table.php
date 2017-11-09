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
            $table->string('id');
                        $table->string('color');
                        $table->string('category');
                        $table->string('productname');
                        $table->string('price');
                        $table->string('description');
                        $table->string('tag');
                        $table->string('productmaterial');
                        $table->string('imageurl');
                        $table->string('createdat');
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
