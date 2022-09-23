<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGenreinmoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('genreinmovies', function (Blueprint $table) {
            $table->foreign(['movie_id'])->references(['id'])->on('movies')->onDelete('CASCADE');
            $table->foreign(['genre_id'])->references(['id'])->on('genres')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('genreinmovies', function (Blueprint $table) {
            $table->dropForeign('genreinmovies_movie_id_foreign');
            $table->dropForeign('genreinmovies_genre_id_foreign');
        });
    }
}
