<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeleksisTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('seleksis')) {
            Schema::create('seleksis', function (Blueprint $table) {
                $table->id();
                $table->foreignId('pendaftar_id')->constrained()->onDelete('cascade');
                $table->string('status')->default('lihat');
                $table->timestamps();
            });
        }
    }
    

    public function down(): void
    {
        Schema::dropIfExists('seleksis');
    }
}
