<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProjectProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_project_profile', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->string('project_profile')->nullable();
                $table->string('description')->nullable();
                $table->string('posting_date')->nullable();
                $table->string('create_by')->nullable();
                $table->string('last_update')->nullable();
                $table->string('update_by')->nullable();
                $table->string('status')->nullable();
                $table->string('company')->nullable();
                $table->string('type_inv')->nullable();
    
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
        Schema::dropIfExists('m_project_profile');
    }
}
