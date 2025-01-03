<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nilai');
            $table->integer('surat_dokter');
            $table->integer('zonasi');
            $table->integer('kelulusan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
};
