<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->foreign(['country_id'])->references(['id'])->on('countries')->onDelete('CASCADE');
            $table->foreign(['profileimage_id'])->references(['id'])->on('images')->onDelete('CASCADE');
            $table->foreign(['category_id'])->references(['id'])->on('categories')->onDelete('CASCADE');
            $table->foreign(['coverimage_id'])->references(['id'])->on('images')->onDelete('CASCADE');
            $table->foreign(['trailer_id'])->references(['id'])->on('trailers')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropForeign('movies_country_id_foreign');
            $table->dropForeign('movies_profileimage_id_foreign');
            $table->dropForeign('movies_category_id_foreign');
            $table->dropForeign('movies_coverimage_id_foreign');
            $table->dropForeign('movies_trailer_id_foreign');
        });
    }
}
