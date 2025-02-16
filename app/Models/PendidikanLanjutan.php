<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PendidikanLanjutan extends Model
{

    use HasFactory;

    protected $fillable = [
        'unit_pendidikan',
        'tingkat_lanjutan',
    ];

}
