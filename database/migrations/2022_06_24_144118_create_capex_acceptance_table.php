<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapexAcceptanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capex_acceptance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nopeg')->nullable();
            $table->string('acc')->nullable();
            $table->string('company')->nullable();
            $table->string('ka')->nullable();
            $table->string('year')->nullable();
            $table->string('status')->nullable();
            $table->string('create_by')->nullable();
            $table->string('update_by')->nullable();
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
        Schema::dropIfExists('capex_acceptance');
    }
}
