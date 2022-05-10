<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asrama', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gambar')->nullable();
            $table->string('namaasrama')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('jenisasrama')->nullable();
            $table->string('fasilitas',2000)->nullable();
            $table->string('gambar1')->nullable();
            $table->string('deskripsi',2000)->nullable();
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
        Schema::dropIfExists('asrama');
    }
};
