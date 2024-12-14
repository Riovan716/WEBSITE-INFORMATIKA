<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontaksTable extends Migration
{
    public function up()
    {
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nomor_telepon');
            $table->string('kode_pos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kontaks');
    }
}