<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('barcode', 60);
            $table->string('name',30);
            $table->string('description',60);
            $table->double('stock',8,2);
            $table->double('priceOut',8,2);
            $table->date('creationDate');
            $table->dateTime('dateExpiry');
            $table->dateTime('updateDate');

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
        Schema::dropIfExists('product');
    }
}
