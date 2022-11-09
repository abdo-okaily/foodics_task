<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prdouct_ingredients', function (Blueprint $table) {
            $table->primary(['product_id','ingredient_id']);
            $table->bigInteger('product_id')->unsigned()->index();
            $table->bigInteger('ingredient_id')->unsigned()->index();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
            $table->foreign('ingredient_id')
                ->references('id')
                ->on('ingredients');
            $table->integer('amount');
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
        Schema::dropIfExists('prdouct_ingredients');
    }
};
