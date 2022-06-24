<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMGlAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gl_account', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gl_account')->nullable();
            $table->string('description')->nullable();
            $table->string('account_type')->nullable();
            $table->string('cf_acc')->nullable();
            $table->string('cf_tb')->nullable();
            $table->string('contra_acc1')->nullable();
            $table->string('dimlist')->nullable();
            $table->string('fs_structure')->nullable();
            $table->string('group')->nullable();
            $table->string('pintco')->nullable();
            $table->string('production_costing')->nullable();
            $table->string('rate_type')->nullable();
            $table->string('type_elim')->nullable();
            $table->string('parenth1')->nullable();
            $table->string('parenth2')->nullable();
            $table->string('parenth3')->nullable();
            $table->string('contra_acc2')->nullable();
            $table->string('create_by')->nullable();
            $table->string('update_by')->nullable();
            $table->string('last_update')->nullable();
            $table->string('posting_date')->nullable();
            $table->string('status')->nullable();
            $table->string('closing_quantity')->nullable();
            $table->string('costcenter_allocation')->nullable();
            $table->string('parenth4')->nullable();
            $table->string('oa')->nullable();
            $table->string('cash_flow')->nullable();
            $table->string('group_cycle')->nullable();
            $table->string('structure_costing')->nullable();
            $table->string('group_hr')->nullable();
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
        Schema::dropIfExists('m_gl_account');
    }
}
