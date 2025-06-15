<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{

    protected $table = 'data_diris';

protected $fillable = [
    'sudah_vaksin',
    'tanggal_vaksin',
    'jenis_vaksin',
    'gejala_serius',
    'pernah_covid',
    'gejala_ispa',
    'hipertensi',
    'penyakit_kronis',
];}
