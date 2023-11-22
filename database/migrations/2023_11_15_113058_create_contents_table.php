<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('image_convert')->nullable();
            $table->string('url')->nullable();
            $table->boolean('status')->default(0); 
            $table->string('view')->default(0); 
            $table->integer('content_type')->nullable();
            $table->integer('sort')->default(0); 
            $table->text('link')->nullable();
            $table->text('description')->nullable();
            $table->integer('parent_id')->nullable();
            $table->text('keywords')->nullable();
            $table->text('lead')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
