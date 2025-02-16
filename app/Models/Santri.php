<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_santri',
        'ttl',
        'jenis_kelamin',
        'anak_ke',
        'asal_sekolah',
        'alamat',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'status_ayah',
        'status_ibu',
        'alamat_orang_tua',
        'no_hp_orang_tua',
        'email_ortu',
        'wali',
        'nama_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'no_hp_wali',
        'email_wali',
        'pas_foto',
        'akte_kelahiran',
        'scan_kk',
        'ktp_ayah',
        'ktp_ibu',
        'tahun_ajaran',
        'pendidikan_lanjutan',
        'minat_bakat',
        'status_pendaftaran',
        'code_pendaftaran',
    ];
    
}
