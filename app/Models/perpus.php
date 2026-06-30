<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class perpus extends Model
{
    protected $table = 'perpus';

    protected $fillable = ['nama','jurusan','judul_buku','qty'];
}
