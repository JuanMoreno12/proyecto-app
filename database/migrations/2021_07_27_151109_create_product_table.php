<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();//crea un campo auto incrementable entero din signo
            $table->string('name',50);
            $table->double('cost',10,2);
            $table->double('price',10,2);
            $table->integer('quantity');
            $table->string('brand',50);
            $table->timestamps();//created_at,updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
