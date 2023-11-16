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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->text('link')->nullable();
            $table->string('type')->nullable();
            $table->text('desc')->nullable();
            $table->text('video_url')->nullable();
            $table->bigInteger('serial_number')->nullable();
            $table->boolean('is_paid')->default(false)->nullable();
            $table->boolean('is_exclusive')->default(false)->nullable();
            $table->boolean('is_featured')->default(false)->nullable();
            $table->boolean('new_game')->default(false)->nullable();
            $table->boolean('recommended_game')->default(false)->nullable();
            $table->string('thumbnail', 255)->nullable();
            $table->string('image_link', 255)->nullable();
            $table->bigInteger('total_visitors')->default(0);
            $table->bigInteger('total_played')->default(0);
            $table->text('custom_description')->nullable();
            $table->string('orientation')->nullable();
            $table->string('game_published')->nullable();
            $table->string('game_modified')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('game_type')->nullable();
            $table->string('game_sub_type')->nullable();
            $table->string('game_Mobile')->nullable();
            $table->string('mobile_mode')->nullable();
            $table->string('Https')->nullable();
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
        Schema::dropIfExists('games');
    }
};
