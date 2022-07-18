<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradisiHudoqTable extends Migration
{
    public function up()
    {
        Schema::create('tradisi_hudoq', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('budaya_id')->default(1)->unsigned();
            $table->foreign('budaya_id')->references('id')->on('budaya')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama')->nullable();
            $table->text('gambar')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tradisi_hudoq');
    }
}
