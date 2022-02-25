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
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
            // updated_at - datetime, nullable
        });

        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('image_id')->nullable();
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->string('name')->nullable();
            $table->string('species')->nullable();
            $table->string('breed')->nullable();
            $table->integer('age')->nullable();
            $table->integer('weight')->nullable();
            $table->timestamps();
            // updated_at - datetime, nullable
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable();
            $table->timestamps();
            // updated_at - datetime, nullable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('owners');
        Schema::drop('animals');
        Schema::drop('images');
    }
};
