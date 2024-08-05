<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->text('about')->nullable();
            $table->text('about2')->nullable();
            $table->string('aboutshort')->nullable();
            $table->text('contact')->nullable();
            $table->text('mobile')->nullable();
            $table->string('banner')->nullable();
            $table->string('banner1')->nullable();
            $table->string('banner2')->nullable();
            $table->string('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('description')->nullable();
            $table->text('description2')->nullable();
            $table->text('description3')->nullable();
            $table->text('keywords')->nullable();
            $table->string('title_seo')->nullable();
            $table->string('link')->nullable();
            $table->text('description_seo')->nullable();
            $table->text('code')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
