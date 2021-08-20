<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
            ->constrained('orders')
            ->onDelete('cascade');
            $table->string('cashiar_id')->default('1');
            $table->string('invoice_no')->nullable();
            $table->string('order_date')->nullable();
            $table->string('order_month')->nullable();
            $table->string('order_year')->nullable();
            $table->string('p_name')->nullable();
            $table->string('bying_price')->nullable();
            $table->string('selling_price')->nullable();
            $table->string('qty')->nullable();
            $table->string('total_price')->nullable();
            $table->string('itemvat')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('service_charge_vat')->nullable();
            $table->string('sd')->nullable();
            $table->string('discount')->nullable();
            $table->string('return')->nullable();
            $table->string('net_value')->nullable();
            $table->string('pay_type')->nullable();
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
        Schema::dropIfExists('order_items');
    }
}
