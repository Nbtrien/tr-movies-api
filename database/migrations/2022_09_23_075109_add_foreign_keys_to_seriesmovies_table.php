<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSeriesmoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seriesmovies', function (Blueprint $table) {
            $table->foreign(['movie_id'])->references(['id'])->on('movies')->onDelete('CASCADE');
            $table->foreign(['category_id'])->references(['id'])->on('categories')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seriesmovies', function (Blueprint $table) {
            $table->dropForeign('seriesmovies_movie_id_foreign');
            $table->dropForeign('seriesmovies_category_id_foreign');
        });
    }
}
