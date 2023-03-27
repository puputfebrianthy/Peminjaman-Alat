<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamanAlat extends Model
{
    use HasFactory;
    protected $table = 'tb_peminjaman';
    protected $guarded = [''];
}
