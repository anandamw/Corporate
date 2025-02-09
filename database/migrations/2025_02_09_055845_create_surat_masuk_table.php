<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat')->unique(); // Tambahkan unique jika no_surat tidak boleh sama
            $table->string('pengirim');
            $table->string('perihal');
            $table->string('link')->nullable();
            $table->date('tgl_masuk');
            $table->date('tgl_keluar')->nullable(); // Bisa jadi opsional
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke users
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');

            $table->timestamps();
            $table->softDeletes(); // Untuk menghindari penghapusan permanen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
};
