<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim', 100);
            $table->string('nama');
            $table->string('prestasi', 100);
            $table->text('keterangan');
            $table->string('gambar');
            $table->unsignedBigInteger('kompetisi_id')->nullable();

            // Definisi foreign key
            $table->foreign('kompetisi_id')
                ->references('id')
                ->on('kompetisi')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participants', function (Blueprint $table) {
            // Hapus foreign key
            $table->dropForeign(['kompetisi_id']);
            // Hapus kolom kompetisi_id
            $table->dropColumn('kompetisi_id');
        });

        // Hapus tabel participants
        Schema::dropIfExists('participants');
    }
};
