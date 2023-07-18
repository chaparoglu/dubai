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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->text('model');
            $table->integer('year');
            $table->string('img');
            $table->text('images');
            $table->string('brend');
            $table->string('muherrik');
            $table->integer('class');
            $table->integer('trans');
            $table->integer('yanacaq');
            $table->string('price');
            $table->string('slug');
            $table->integer('order');
            $table->integer('status');
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
        Schema::dropIfExists('cars');
    }
};
