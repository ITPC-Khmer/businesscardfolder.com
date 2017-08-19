<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('member_id')->index()->nullable();
            $table->integer('company_id')->index()->nullable();
            $table->string('title')->index()->nullable();
            $table->string('description')->nullable();


            $table->enum('adv_type', ['type1', 'type2','type3'])->default('type1');
            $table->enum('adv_location', ['location1', 'location2','location3'])->default('location1');

            // image
            $table->text('image')->nullable();// json


            $table->enum('adv_status', ['Pending', 'Approve','Reject'])->default('Pending');
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('PUBLISHED');

            $table->integer('adv_page_order')->index()->nullable()->default(0);// big to small
            $table->integer('adv_page_rank')->index()->nullable()->default(0);// big to small

            $table->integer('adv_view')->default(0);
            $table->integer('adv_click')->default(0);

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
        Schema::dropIfExists('advertises');
    }
}
