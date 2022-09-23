<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actors', function (Blueprint $table) {
            $table->foreign(['image_id'], 'movies_image_id_foreign')->references(['id'])->on('images')->onDelete('CASCADE');
            $table->foreign(['country_id'], 'movies_countries_id_foreign')->references(['id'])->on('countries')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actors', function (Blueprint $table) {
            $table->dropForeign('movies_image_id_foreign');
            $table->dropForeign('movies_countries_id_foreign');
        });
    }
}
