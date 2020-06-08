<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomestayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestay', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('contact');
            $table->string('email');
            $table->string('address');
            $table->string('rating');
            $table->text('review');
            $table->text('deskripsi');
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
        Schema::dropIfExists('homestay');
    }
}
