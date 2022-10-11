<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

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
            $table->bigIncrements('item_id');
            $table->date('date');
            $table->timestamps();
            $table->foreignId('type_id')->references('type_id')->on('baskets');
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
};
