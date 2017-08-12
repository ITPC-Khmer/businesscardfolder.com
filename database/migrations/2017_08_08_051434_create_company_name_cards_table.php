<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyNameCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_name_cards', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('member_id')->index()->nullable();
            $table->integer('company_id')->index()->nullable();

            $table->string('id_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('given_name')->nullable();
            $table->string('family_name')->nullable();
            $table->enum('married_status', ['Single', 'Married'])->default('Single');// title status
            $table->enum('sex', ['Male', 'Female'])->default('Male');

            $table->integer('department_id')->nullable()->default(0);
            $table->integer('position_id')->nullable()->default(0);
            // phone contact

            $table->text('mobile_number')->nullable();// json
            $table->text('telephone_number')->nullable();// json

            //

            $table->text('email')->nullable();// json
            $table->string('fax')->nullable();// json
            $table->string('website')->nullable();// json

            // social
            $table->text('social_media')->nullable();// json
            $table->text('mobile_network')->nullable();// json

            // image
            $table->string('card_vertical')->nullable();
            $table->string('card_horizontal')->nullable();
            $table->string('id_image')->nullable();
            $table->string('passport_image')->nullable();
            $table->string('photo')->nullable();
            // end image

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
        Schema::dropIfExists('company_name_cards');
    }
}
