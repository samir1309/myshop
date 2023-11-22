<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->integer('product_specification_id')->nullable();
            $table->string('file')->nullable();
            $table->integer('thumbnail')->default(0);
            $table->integer('convert')->default(0);
            $table->string('old_file')->nullable();
            $table->string('main_file')->nullable();
            $table->string('file_webp')->nullable();
            $table->integer('sort')->default(1);
            $table->integer('img')->default(0);
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
        Schema::dropIfExists('images');
    }
}
