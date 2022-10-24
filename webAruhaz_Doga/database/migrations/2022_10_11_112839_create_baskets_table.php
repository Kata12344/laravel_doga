<?php

use App\Models\Basket;
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
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->references('item_id')->on('products');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Basket::create(['item_id'=>1,'user_id'=>3]);
        Basket::create(['item_id'=>2,'user_id'=>2]);
        Basket::create(['item_id'=>3,'user_id'=>1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baskets');
    }
};
