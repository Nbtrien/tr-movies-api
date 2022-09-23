<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMovieinseriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movieinseries', function (Blueprint $table) {
            $table->foreign(['series_id'])->references(['id'])->on('series')->onDelete('CASCADE');
            $table->foreign(['movie_id'])->references(['id'])->on('movies')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movieinseries', function (Blueprint $table) {
            $table->dropForeign('movieinseries_series_id_foreign');
            $table->dropForeign('movieinseries_movie_id_foreign');
        });
    }
}
