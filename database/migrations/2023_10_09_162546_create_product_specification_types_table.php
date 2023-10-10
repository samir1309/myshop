<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSpecificationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_specification_types', function (Blueprint $table) {

            $table->id();
            $table->text('title')->nullable();
            $table->boolean('status')->default(0); 
            $table->integer('sort')->default(1); 
            $table->integer('filter')->nullable();
            $table->integer('parent_id')->nullable();
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
        Schema::dropIfExists('product_specification_types');
    }
}
