<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKoorBudgetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_koor_budget', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('koor_budget')->nullable();
            $table->string('description')->nullable();
            $table->string('costcenter')->nullable();
            $table->string('parenth1')->nullable();
            $table->string('status')->nullable();
            $table->string('company')->nullable();
            $table->string('capex')->nullable();

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
        Schema::dropIfExists('m_koor_budget');
    }
}
