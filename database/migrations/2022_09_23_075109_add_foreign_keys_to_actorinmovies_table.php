<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToActorinmoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actorinmovies', function (Blueprint $table) {
            $table->foreign(['movie_id'])->references(['id'])->on('movies')->onDelete('CASCADE');
            $table->foreign(['actor_id'])->references(['id'])->on('actors')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actorinmovies', function (Blueprint $table) {
            $table->dropForeign('actorinmovies_movie_id_foreign');
            $table->dropForeign('actorinmovies_actor_id_foreign');
        });
    }
}
