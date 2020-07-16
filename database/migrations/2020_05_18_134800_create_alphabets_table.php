<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlphabetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alphabets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('makharij_id');
            $table->string('slug');
            $table->string('letter')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('sound')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('alphabets');
    }
}
