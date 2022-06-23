<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCostcenterStructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_costcenter_structure', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('directorat', 15);
            $table->string('departement', 15);
            $table->string('pic', 15);
            $table->string('company', 8);
            $table->string('created_by', 20);
            $table->string('updated_by', 20);
            $table->timestamps();
            $table->string('status', 2);
            $table->string('kadir', 30);
            $table->string('unit_kerja', 30);
            $table->string('year', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
