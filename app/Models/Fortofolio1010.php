<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fortofolio1010 extends Model
{
    use HasFactory;

    // Nama tabel sesuai kriteria tugas
    protected $table = 'fortofolio_1010';

    protected $fillable = ['judul', 'deskripsi', 'gambar', 'link'];
}