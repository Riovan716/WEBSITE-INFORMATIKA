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
        Schema::create('kompetisi', function (Blueprint $table) {
            $table->id(); // Auto increment ID
            $table->string('nama', 500);
            $table->date('tanggal');
            $table->string('penyelenggara', 500);
            $table->text('keterangan');
            $table->string('gambar');
            $table->string('link', 500);
            $table->timestamps(); // Untuk created_at dan updated_at
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kompetisi');
    }
};
