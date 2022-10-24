<?php

use App\Models\Product;
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
    //Készítette: Szundi Kata
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('item_id');
            //$table->integer('type_id');
            $table->date('date');
            $table->foreignId('type_id')->references('type_id')->on('product_types');
            $table->timestamps();
           
        });
        Product::create(['type_id'=>1,'date'=>'2002-06-04']);
        Product::create(['type_id'=>2,'date'=>'2013-11-05']);
        Product::create(['type_id'=>3,'date'=>'2022-08-24']);


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
};
