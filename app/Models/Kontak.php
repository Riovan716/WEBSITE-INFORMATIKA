<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'kontaks';

    // Kolom yang bisa diisi (fillable)
    protected $fillable = [
        'email',
        'instagram',
        'nomor_telepon',
        'kode_pos',
    ];
}