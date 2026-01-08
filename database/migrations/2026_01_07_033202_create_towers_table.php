<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('towers', function (Blueprint $table) {
            $table->id();

            $table->text('description');
            $table->text('lokasi');

            $table->enum('status_sertifikat', ['bersertifikat', 'belum']);

            $table->decimal('luas', 10, 2)->nullable();

            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);

            $table->string('no_surat')->nullable();
            $table->string('no_sertifikat')->nullable();

            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('city');

            $table->date('tgl_awal')->nullable();
            $table->date('tgl_akhir')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('towers');
    }
};
