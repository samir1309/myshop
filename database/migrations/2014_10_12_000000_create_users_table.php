<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();;
            $table->string('family')->nullable();
            $table->string('mobile')->nullable();
            $table->string('confirm_code')->nullable();
            $table->string('email')->unique();
            $table->integer('admin')->length(1)->default(0); 
            $table->integer('email_confirm')->length(1)->default(0); 
            $table->integer('mobile_confirm')->length(1)->default(0); 
            $table->text('password')->nullable();
            $table->text('temp_password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
