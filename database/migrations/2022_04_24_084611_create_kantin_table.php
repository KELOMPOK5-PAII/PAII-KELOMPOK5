<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKantinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kantin', function (Blueprint $table) {
            $table->id();
            $table->string('namakantin')->nullable();
            $table->string('jammakan')->nullable();
            $table->string('perlengkapan')->nullable();
            $table->string('peraturan')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('gambar')->nullable();
            $table->string('gambar1');
            $table->string('gambar2');
            $table->string('gambar3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kantin');
    }
}
