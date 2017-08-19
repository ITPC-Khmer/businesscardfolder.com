<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->index()->nullable()->default(0);
            $table->integer('company_id')->index()->nullable()->default(0);
            $table->integer('category_id')->index()->nullable()->default(0);
            $table->integer('brand_id')->index()->nullable()->default(0);
            $table->string('title');
            $table->double('price')->nullable()->default(0);
            $table->double('promotion_price')->nullable()->default(0);
            $table->date('promotion_price_exp')->nullable();

            $table->enum('show_price', ['YES', 'NO'])->default('YES');
            $table->string('slug')->default('');
            $table->text('content')->nullable();
            $table->text('image')->nullable();
            $table->enum('item_type', ['PRODUCT', 'SERVICE', 'OTHER'])->default('PRODUCT');
            $table->enum('condition', ['NEW', 'USER'])->default('NEW');
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('PUBLISHED');
            $table->date('date')->nullable();
            $table->boolean('featured')->default(0);
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
        Schema::dropIfExists('items');
    }
}
