<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('organisation')->nullable();
            $table->string('position')->nullable();
            $table->string('salary')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('nid')->nullable()->unique();
            $table->string('height')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('weight')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('sex')->nullable();
            $table->string('village')->nullable();
            $table->string('po')->nullable();
            $table->string('ps')->nullable();
            $table->string('district')->nullable();
            $table->string('division')->nullable();
            $table->string('academic')->nullable();
            $table->string('status')->default(false);
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
        Schema::dropIfExists('employee_details');
    }
}
