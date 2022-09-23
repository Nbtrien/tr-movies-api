<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userviews', function (Blueprint $table) {
            $table->foreign(['movie_id'])->references(['id'])->on('movies')->onDelete('CASCADE');
            $table->foreign(['episode_id'])->references(['id'])->on('episodes')->onDelete('CASCADE');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userviews', function (Blueprint $table) {
            $table->dropForeign('userviews_movie_id_foreign');
            $table->dropForeign('userviews_episode_id_foreign');
            $table->dropForeign('userviews_user_id_foreign');
        });
    }
}
