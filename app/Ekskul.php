<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $table = 'ekskuls';
    protected $fillable = ['eks','jam','absen','nama'];
    public $timestamps = true;
}
