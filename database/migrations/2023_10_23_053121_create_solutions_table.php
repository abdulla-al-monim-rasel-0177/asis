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
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->longText('sort_description')->nullable();
            $table->longText('description')->nullable();
            $table->text('main_image')->nullable();
            $table->string('image_one')->nullable();
            $table->text('image_two')->nullable();
            $table->text('banner')->nullable();
       
            $table->string('brouchure_pdf')->nullable();
            $table->string('brouchure_text')->nullable();
            $table->text('technical_training')->nullable();
            $table->text('repair_warranty_center')->nullable();
            $table->text('logistics_warehouse')->nullable();
            $table->text('product_approvals')->nullable();
            $table->text('lmport_clearance')->nullable();
            $table->text('marketing_sales')->nullable();
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
        Schema::dropIfExists('solutions');
    }
};
