<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company');
            $table->string('description')->nullable();
            $table->string('parenth1')->nullable();
            $table->string('costcenter')->nullable();
            $table->string('currency')->nullable();
            $table->string('elim')->nullable();
            $table->string('interco')->nullable();
            $table->string('interco_for_equ')->nullable();
            $table->string('parenth2')->nullable();
            $table->string('status')->nullable();
            $table->string('create_by')->nullable();
            $table->string('update_by')->nullable();
            $table->string('logo')->nullable();
            $table->string('long_logo')->nullable();
            $table->string('short_description')->nullable();
            $table->integer('short_hr')->nullable();
            $table->string('short_desc_inventory')->nullable();
            $table->string('dirut_name')->nullable();
            $table->string('menu')->nullable();
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
        Schema::dropIfExists('m_company');
    }

}
