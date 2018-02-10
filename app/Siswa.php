<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['absen','nama','kelas','jurusan','ttl'];
    public $timestamps = true;
}
