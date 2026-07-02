<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class keseharian extends Model
{
    protected $fillable = [
        'nama', 'tanggal', 'jam', 'tempat', 'kegiatan', 'status'
    ];
}