<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\Product_type;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//Vitay Zalán
        Schema::create('product_types', function (Blueprint $table) {
            $table->bigIncrements('type_id');
            //$table->foreignId('type_id')->references('type_id')->on('products');
            $table->string('name', 40);
            $table->longText('description', 150);
            $table->integer('cost');
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
        Schema::dropIfExists('product_types');
    }
}
