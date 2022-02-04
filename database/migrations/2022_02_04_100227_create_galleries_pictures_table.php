<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_picture', function (Blueprint $table) {
            $table->id();
            $table->integer('gallery_id')->index('fk_galleries_pictures1_idx');
            $table->foreign(['gallery_id'], 'fk_galleries_pictures1')->references(['id'])->on('galleries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->integer('picture_id')->index('fk_pictures_galleries_idx');
            $table->foreign(['picture_id'], 'fk_galleries_pictures')->references(['id'])->on('pictures')->onUpdate('NO ACTION')->onDelete('NO ACTION');

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
        Schema::dropIfExists('galleries_pictures');
    }
}
