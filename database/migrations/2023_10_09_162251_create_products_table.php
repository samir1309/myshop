<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('title')->nullable();
            $table->string('title_en')->nullable();
            $table->string('url')->nullable();
            $table->boolean('status')->default(0); 
            $table->string('count')->nullable();
            $table->text('how_to_use')->nullable();
            $table->text('ingredients')->nullable();
            $table->integer('like_count')->default(0); 
            $table->integer('sort')->default(0); 
            $table->text('video_link')->nullable();
            $table->text('description')->nullable();
            $table->string('price')->nullable();
            $table->string('old_price')->nullable();
            $table->integer('stocks')->nullable();
            $table->text('keywords')->nullable();
            $table->text('lead')->nullable();
            $table->string('title_seo')->nullable();
            $table->text('description_seo')->nullable();
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
}
