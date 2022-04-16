<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'tim',
        'kelas',
        'email',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'rt_rw',
        'jalan',
        'no_wa',
        'kartu_identitas',
    ];
}
