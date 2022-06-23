<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPlantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_plant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plant')->nullable();
            $table->string('description')->nullable();
            $table->string('category')->nullable();
            $table->string('type')->nullable();
            $table->string('parenth1')->nullable();
            $table->string('cc1')->nullable();
            $table->string('costcenter')->nullable();
            $table->string('sender_bag')->nullable();
            $table->string('parenth2')->nullable();
            $table->string('status')->nullable();
            $table->string('cc2')->nullable();

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
        Schema::dropIfExists('m_plant');
    }
}
