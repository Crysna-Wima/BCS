<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCapexConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_capex_config', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('status')->nullable();
            $table->string('company')->nullable();
            $table->string('description')->nullable();
            $table->year('year')->nullable();
            $table->string('create_by')->nullable();
            $table->date('create_date')->nullable();
            $table->string('update_by')->nullable();
            $table->date('update_date')->nullable();
            $table->string('type')->nullable();
            
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
        Schema::dropIfExists('m_capex_config');
    }
}
