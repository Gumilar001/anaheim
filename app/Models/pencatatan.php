<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencatatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_project',
        'tanggal',
        'frontend',
        'jumlahFrontend',
        'uiux',
        'jumlahUiux',
        'backend',
        'jumlahBackend',
        'consultant_it',
        'jumlahConsultantIt',
        'transportasi',
        'jumlahTransportasi',
        'penginapan',
        'jumlahPenginapan',
        'konsumsi',
        'jumlahKonsumsi',
        'pajak',
        'total',
    ];
}