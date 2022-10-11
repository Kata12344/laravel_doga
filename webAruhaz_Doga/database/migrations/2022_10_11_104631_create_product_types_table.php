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
            $table->mediumInteger('cost');
            $table->timestamps();
        });

        Product_type::create(['name'=>'tusfürdő','description'=>'férfi 10 az egyben: arcra, seggre, kormányra, kaktusznak...','cost'=>2300]);
        Product_type::create(['name'=>'kormányvédő','description'=>'Univerzális, bőrhatású','cost'=>5000]);
        Product_type::create(['name'=>'hajszárító','description'=>'Mágneses, akkumlátoros, ionizáló','cost'=>4800]);
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
