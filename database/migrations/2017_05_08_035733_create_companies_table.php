<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('member_id')->index()->unique();
            $table->text('business_type_json')->nullable();
            // type
            $table->string('business_category_id')->index()->nullable();
            $table->string('business_type_id')->index()->nullable();

            $table->string('business_function_id')->index()->nullable();
            $table->string('business_intermediary_id')->index()->nullable();

            $table->integer('business_trade_form_id')->index()->nullable()->default(0);
            $table->integer('business_trade_form_detail_id')->index()->nullable()->default(0);

            // name
            $table->string('official_name')->index()->nullable();
            $table->string('non_official_name')->index()->nullable();// Store / Shop / Mall

            // license
            $table->string('moc_certificate')->index()->nullable();
            $table->text('moc_certificate_document')->nullable();
            $table->string('moc_certificate_expiration_date')->nullable();

            $table->string('vat_tin_number')->index()->nullable();
            $table->text('vat_tin_number_document')->nullable();
            $table->string('vat_tin_number_expiration_date')->nullable();

            $table->string('patent_license_number')->index()->nullable();
            $table->text('patent_license_document')->nullable();
            $table->string('patent_license_number_expiration_date')->nullable();

            $table->string('other_license_number')->index()->nullable();
            $table->text('other_license_document')->nullable();
            $table->string('other_license_number_expiration_date')->nullable();

            // address
            $table->integer('country_id')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('commune_id')->nullable();
            $table->integer('village_id')->nullable();
            $table->string('street')->nullable();
            $table->string('house_number')->nullable();
            $table->string('zip_code')->nullable();
            $table->text('address')->nullable();

            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

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
            $table->text('image')->nullable();// json

            $table->text('working_hours')->nullable();// json


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
        Schema::dropIfExists('companies');
    }
}
