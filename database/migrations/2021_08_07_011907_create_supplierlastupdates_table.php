<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierlastupdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplierlastupdates', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_date_id')->nullable();
            $table->string('date')->nullable();
            $table->string('deposit_money')->nullable();
            $table->string('owing')->nullable();
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
        Schema::dropIfExists('supplierlastupdates');
    }
}
