<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->nullable();
            $table->string('username')->nullable()->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->char('status',1)->default('1');
            $table->string('mk_nopeg')->nullable();
            $table->string('mk_nama')->nullable();
            $table->string('company')->nullable();
            $table->string('company_default')->nullable();
            $table->unsignedBigInteger('costcenter')->nullable();
            $table->unsignedBigInteger('costcenter2')->nullable();
            $table->unsignedBigInteger('costcenter_default')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('online')->nullable();
            $table->string('visit')->nullable();
            $table->string('photo')->nullable();
            $table->string('reset')->nullable();
            $table->string('key_devices')->nullable();
            $table->rememberToken();
            $table->date('deleted_at')->nullable();
            $table->timestamps();


        });

        DB::unprepared("            
            CREATE TRIGGER before_insert_users
            BEFORE INSERT ON users
            FOR EACH ROW
            BEGIN
              IF new.id IS NULL THEN
                SET new.id = uuid();
              END IF;
            END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER [IF EXISTS] `before_insert_users`');
        Schema::dropIfExists('users');
    }
}
