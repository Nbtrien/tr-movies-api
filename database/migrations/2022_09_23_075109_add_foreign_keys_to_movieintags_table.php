<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMovieintagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movieintags', function (Blueprint $table) {
            $table->foreign(['tag_id'])->references(['id'])->on('tags')->onDelete('CASCADE');
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
        Schema::table('movieintags', function (Blueprint $table) {
            $table->dropForeign('movieintags_tag_id_foreign');
            $table->dropForeign('movieintags_movie_id_foreign');
        });
    }
}
