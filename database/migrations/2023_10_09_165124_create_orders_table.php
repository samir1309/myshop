<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id'); 
            $table->double('total_price',15,2)->default(0)->change();
            $table->double('total_calculated',15,2)->default(0)->change();
            $table->double('payment',15,2)->unsigned()->default(0)->change();
            $table->boolean('status')->default(0); 
            $table->text('location')->nullable();
            $table->integer('basket_id')->nullable();
            $table->text('buyer_name')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
