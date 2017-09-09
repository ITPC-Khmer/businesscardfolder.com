<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('role_id')->index()->nullable();
            $table->string('name')->index()->nullable();
            $table->string('username')->index()->nullable();
            $table->string('email')->unique();
            $table->string('phone')->index()->nullable();
            $table->string('password');

            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();

            $table->string('photo')->nullable();

            $table->integer('status')->nullable()->default(1);
            $table->integer('create_by')->nullable()->default(0);
            $table->integer('update_by')->nullable()->default(0);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
