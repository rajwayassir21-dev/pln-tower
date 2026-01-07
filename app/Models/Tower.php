<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tower extends Model
{
    protected $fillable = [
        'description',
        'lokasi',
        'status_sertifikat',
        'luas',
        'latitude',
        'longitude',
        'no_surat',
        'no_sertifikat',
        'kelurahan',
        'kecamatan',
        'city',
        'tgl_awal',
        'tgl_akhir',
        'foto',
    ];
}
