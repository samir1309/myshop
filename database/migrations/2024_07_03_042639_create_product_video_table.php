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
        Schema::create('product_video', function (Blueprint $table) {
            $table->id()->BigIncrement();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->integer('product_id')->nullable();
            $table->string('file')->nullable();
            $table->string('time')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(0); 
            $table->integer('sort')->default(0); 
            $table->integer('listorder')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->string('title_seo')->nullable();
            $table->text('description_seo')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
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
        Schema::dropIfExists('product_video');
    }
};
