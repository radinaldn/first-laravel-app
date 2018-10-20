<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // 1.buat nama table sesuai hasil migrate tadi
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';

}
