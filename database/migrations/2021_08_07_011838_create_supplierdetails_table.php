<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplierdetails', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_id');
            $table->string('date')->nullable();
            $table->string('prodact_name')->nullable();
            $table->string('qty')->nullable();
            $table->string('rate')->nullable();
            $table->string('total_price')->nullable();
            $table->string('due')->nullable();
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
        Schema::dropIfExists('supplierdetails');
    }
}
