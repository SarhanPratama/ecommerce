<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tbsatuan';

    protected $fillable = [
        'nama',
    ];
}
