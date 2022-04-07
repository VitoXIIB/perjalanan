<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = 'perjalanan';
    protected $fillable = [
        'tanggal',
        'jam',
        'lokasi',
        'suhu_tubuh',
    ];
}
