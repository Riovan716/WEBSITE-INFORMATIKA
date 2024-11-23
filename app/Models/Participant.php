<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $table = 'participants';
    protected $fillable = ['nim', 'nama', 'prestasi', 'keterangan', 'gambar', 'kompetisi_id'];

    public function kompetisi()
    {
        return $this->belongsTo(Kompetisi::class, 'kompetisi_id');
    }
}
