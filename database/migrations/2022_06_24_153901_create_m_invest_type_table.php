<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMInvestTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_invest_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipe_investasi')->nullable();
            $table->string('description')->nullable();
            $table->string('type_investasi_act')->nullable();
            $table->string('capex_type')->nullable();
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
        Schema::dropIfExists('m_invest_type');
    }
}
