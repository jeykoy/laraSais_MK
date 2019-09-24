<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockinsTable extends Migration
{
    /**
 * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('itemId');
            $table->unsignedInteger('quantityAdded');
            $table->timestamps();
            $table->foreign('itemId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stockins');
    }
}