<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inventory', function (Blueprint $table) {
            $table->string('VIN', 17)->primary();
            $table->integer('Year');
            $table->string('Make',50); 
            $table->string('Model',50);
            $table->string('Trim',50);
            $table->string('EXT_COLOR',50);
            $table->string('INT_COLOR',50);
            $table->decimal('ASKING_PRICE DECIMAL', 10,2);
            $table->decimal('SALE_PRICE DECIMAL', 10,2);
            $table->decimal('PURCHASE_PRICE DECIMAL', 10,2);
            $table->integer('MILEAGE');
            $table->string('TRANSMISSION',50);
            $table->date('PURCHASE_DATE');
            $table->date('SALE_DATE');








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
        Schema::dropIfExists('Inventory');
    }
}
