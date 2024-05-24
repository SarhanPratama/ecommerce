<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tbbarang';

    protected $fillable = [
        'kode',
        'nama',
        'idsatuan',
        'idkategori',
        'sawal',
        'hb',
        'hj',
        'desc',
        'pajang',
        'foto',
    ];

    public function satuan()
    {
        return $this->belongsTo(satuan::class, 'idsatuan', 'id');
    }
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'idkategori', 'id');
    }
}
