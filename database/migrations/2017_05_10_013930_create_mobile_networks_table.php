<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_networks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->nullable();
            $table->string('company_name')->index()->nullable();
            $table->string('logo')->nullable();
            $table->string('website')->index()->nullable();
            $table->string('prefix_account')->nullable();// #sonsothea
            $table->text('description')->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobile_networks');
    }
}
