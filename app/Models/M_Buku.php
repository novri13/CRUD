<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Buku extends Model
{
    use softDeletes;
    protected $table = 'buku';
    protected $fillable = [
        'judul_buku',
        'pengarang',
        'penerbit',
        'ISBN',
        'tahun_terbit'
    ];
    protected $hidden;
}
