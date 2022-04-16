<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'updated_at',
        'registration_id',
        'jumlah_tiket',
        'total',
        'verified_by',
        'is_verfied',
        'nomor_pembayaran',
        'kode_unik',
        'bukti_pembayaran',

    ];
}
