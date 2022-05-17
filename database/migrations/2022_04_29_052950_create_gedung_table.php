<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGedungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namagedung')->nullable();
            $table->string('deskripsi',2000)->nullable();
            $table->string('aturan',2000)->nullable();
            $table->string('jamoperasional',2000)->nullable();
            $table->string('gambar')->nullable();
            $table->string('gambar1')->nullable();
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
        Schema::dropIfExists('gedung');
    }
}
