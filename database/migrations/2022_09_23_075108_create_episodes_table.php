<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seriesmovie_id')->index('episodes_seriesmovie_id_foreign');
            $table->integer('episode');
            $table->string('title')->nullable()->default('    ');
            $table->unsignedBigInteger('profileimage_id')->index('episodes_profileimage_id_foreign');
            $table->unsignedBigInteger('video_id')->index('episodes_video_id_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
