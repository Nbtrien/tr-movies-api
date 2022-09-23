<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('eng_name');
            $table->text('description');
            $table->string('language');
            $table->string('studio');
            $table->date('releasedate');
            $table->integer('runtime');
            $table->double('avgrating', 8, 2)->default(0);
            $table->integer('view')->default(0);
            $table->unsignedBigInteger('category_id')->index('movies_category_id_foreign');
            $table->unsignedBigInteger('country_id')->index('movies_country_id_foreign');
            $table->unsignedBigInteger('profileimage_id')->index('movies_profileimage_id_foreign');
            $table->unsignedBigInteger('coverimage_id')->index('movies_coverimage_id_foreign');
            $table->unsignedBigInteger('trailer_id')->index('movies_trailer_id_foreign');
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
        Schema::dropIfExists('movies');
    }
}
