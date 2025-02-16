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
    Schema::create('santris', function (Blueprint $table) {
        $table->id();
        $table->string('nama_santri');
        $table->date('ttl');
        $table->enum('jenis_kelamin', ['L', 'P']);

        $table->integer('anak_ke');
        $table->string('asal_sekolah');
        $table->text('alamat');
        
        // Data Orang Tua
        $table->string('nama_ayah');
        $table->string('nama_ibu');
        $table->string('pekerjaan_ayah');
        $table->string('pekerjaan_ibu');
        $table->enum('status_ayah', ['Hidup', 'Meninggal']);
        $table->enum('status_ibu', ['Hidup', 'Meninggal']);
        $table->text('alamat_orang_tua');
        $table->string('no_hp_orang_tua');
        $table->string('email_ortu');
        
        // Data Wali
        $table->string('nama_wali')->nullable();
        $table->string('pekerjaan_wali')->nullable();
        $table->integer('penghasilan_wali')->nullable();
        $table->string('no_hp_wali')->nullable();
        $table->string('email_wali')->nullable();
        
        // Data File
        $table->string('pas_foto');
        $table->string('akte_kelahiran');
        $table->string('scan_kk');
        $table->string('ktp_ayah');
        $table->string('ktp_ibu');

        //tambahan 
        $table->string('tahun_ajaran');
        $table->string('pendidikan_lanjutan');
        $table->string('prestasi')->nullable();

        $table->boolean('status_pendaftaran');
        $table->string('code_pendaftaran')->nullable();
        
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santris');
    }
};
