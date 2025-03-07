<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('video_url');
            $table->string('category');
            $table->integer('release_year');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
