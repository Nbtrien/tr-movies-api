<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('episodes', function (Blueprint $table) {
            $table->foreign(['seriesmovie_id'])->references(['id'])->on('seriesmovies')->onDelete('CASCADE');
            $table->foreign(['profileimage_id'])->references(['id'])->on('images')->onDelete('CASCADE');
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
        Schema::table('episodes', function (Blueprint $table) {
            $table->dropForeign('episodes_seriesmovie_id_foreign');
            $table->dropForeign('episodes_profileimage_id_foreign');
            $table->dropForeign('episodes_video_id_foreign');
        });
    }
}
