<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }

    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga_jual', 10, 2);
            $table->decimal('harga_beli', 10, 2);
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }
}
