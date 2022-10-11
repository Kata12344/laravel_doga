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
            $table->foreignId('item_id')->references('item_id')->on('baskets');
            $table->bigInteger('type_id');
            $table->date('date');
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
};
