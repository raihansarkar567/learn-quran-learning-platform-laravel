<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetterFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_formations', function (Blueprint $table) {
            $table->id();
            $table->string('detached_image')->nullable();
            $table->string('initial_image')->nullable();
            $table->string('medial_image')->nullable();
            $table->string('final_image')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('description')->nullable();
            $table->string('sound')->nullable();
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
        Schema::dropIfExists('letter_formations');
    }
}
