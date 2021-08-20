<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodacts', function (Blueprint $table) {
            $table->id();
            $table->integer('categories_id');
            $table->string('english_name');
            $table->string('bangla_name');
            $table->string('qty');
            $table->integer('bying_price');
            $table->integer('seling_price');
            
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
        Schema::dropIfExists('prodacts');
    }
}
