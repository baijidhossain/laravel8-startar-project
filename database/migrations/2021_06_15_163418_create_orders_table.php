<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('cashier_id')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('day')->default(date('d/m/Y'));
            $table->string('month')->default(date('m/Y'));
            $table->string('year')->default(date('Y'));
            $table->string('pay_type')->default('Cash');
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
        Schema::dropIfExists('orders');
    }
}
