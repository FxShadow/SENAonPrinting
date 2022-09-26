<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supply_id');
            $table->foreign('supply_id')->references('id')->on('supplies');
            $table->unsignedBigInteger('unit_measure_id');
            $table->foreign('unit_measure_id')->references('id')->on('unit_measures');
            $table->float('quantity');
            $table->date('expiration_date');
            $table->string('batch_number');
            $table->unsignedBigInteger('warehouse_id');
            $table->foreign('warehouse_id')->references('id')->on('warehouses');
            $table->string('rack');            
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
        Schema::dropIfExists('supply_details');
    }
};
