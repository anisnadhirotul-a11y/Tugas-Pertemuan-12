<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku', 20)->unique();
            $table->string('judul', 200);

            $table->enum('kategori', [
                'Programming', 
                'Database', 
                'Web Design', 
                'Networking',
                'Data Science'
            ]);

            $table->string('pengarang', 100);

            $table->string('penerbit', 100);

            // TAMBAHAN BARU
            $table->string('negara_penerbit', 50)->nullable();
            $table->string('kota_penerbit', 50)->nullable();

            $table->year('tahun_terbit');
            $table->string('isbn', 20)->nullable();
            $table->decimal('harga', 10, 2);
            $table->integer('stok')->default(0);
            $table->text('deskripsi')->nullable();
            $table->string('bahasa', 20)->default('Indonesia');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
};