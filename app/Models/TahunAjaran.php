<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasFactory;

    protected $table = 'tahun_ajarans';


    protected $fillable = [
         'tahun_ajaran', 'kouta_santri', 'status_pendaftaran'
    ];

    
}
