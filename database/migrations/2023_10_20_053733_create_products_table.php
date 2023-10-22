<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('priority')->nullable();
            $table->string('price')->nullable();
            $table->string('quantity')->nullable();
            
            $table->longText('sort_description')->nullable();
            $table->text('main_image')->nullable();
            $table->string('image_one')->nullable();
            $table->text('image_two')->nullable();
            $table->text('banner')->nullable();
            $table->longText('description')->nullable();
        ;
            $table->string('rating')->default(0);
            $table->text('file')->nullable();
            $table->string('verified')->default(0);
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
        Schema::dropIfExists('products');
    }
};
