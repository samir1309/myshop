<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_en')->nullable();
            $table->string('url')->nullable();
            $table->integer('parent_id')->nullable(); 
            $table->string('color')->nullable(); 
            $table->integer('sortlist')->default(1); 
            $table->integer('sort')->default(1); 
            $table->string('cover')->nullable();
            $table->boolean('status')->default(1); 
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
