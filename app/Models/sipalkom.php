<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sipalkom extends Model
{
    protected $fillable = [
        'nama',
        'jurusan',
        'nama_barang',
        'kondisi',
        'qty',
        'tgl_peminjaman',
        'tgl_kembali',

    ];
}
