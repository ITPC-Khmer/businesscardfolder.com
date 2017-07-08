<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelephoneCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telephone_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->index()->nullable();
            $table->string('company_name')->index()->nullable();
            $table->string('logo')->nullable();
            $table->string('website')->index()->nullable();
            $table->string('prefix_number')->nullable();// [012,092,...]
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
        Schema::dropIfExists('telephone_companies');
    }
}
