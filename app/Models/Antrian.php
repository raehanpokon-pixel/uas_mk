<?php

// app/Models/Antrian.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    protected $table = 'antrian';
    protected $fillable = [
        'layanan',
        'prefix',
        'nama_lengkap',
        'nik',
        'tanggal_lahir',
        'no_hp',
        'nomor_antrian'
    ];
}

