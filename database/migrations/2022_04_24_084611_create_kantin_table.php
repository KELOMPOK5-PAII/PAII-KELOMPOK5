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
            $table->bigIncrements('id');
            $table->string('namakantin')->nullable();
            $table->string('jammakan',2000)->nullable();
            $table->string('perlengkapan',2000)->nullable();
            $table->string('peraturan',2000)->nullable();
            $table->string('deskripsi',2000)->nullable();
            $table->string('gambar')->nullable();
            $table->string('gambar1');
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
        Schema::dropIfExists('kantin');
    }
}
