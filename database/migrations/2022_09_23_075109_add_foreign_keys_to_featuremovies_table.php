<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFeaturemoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('featuremovies', function (Blueprint $table) {
            $table->foreign(['movie_id'])->references(['id'])->on('movies')->onDelete('CASCADE');
            $table->foreign(['category_id'])->references(['id'])->on('categories')->onDelete('CASCADE');
            $table->foreign(['video_id'])->references(['id'])->on('videos')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('featuremovies', function (Blueprint $table) {
            $table->dropForeign('featuremovies_movie_id_foreign');
            $table->dropForeign('featuremovies_category_id_foreign');
            $table->dropForeign('featuremovies_video_id_foreign');
        });
    }
}
