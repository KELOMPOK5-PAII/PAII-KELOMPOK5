<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminKantin extends Model
{
    use HasFactory;
    protected $table = 'kantin';

    protected $fillable = ['id', 'namakantin', 'jammakan', 'perlengkapan', 'peraturan', 'deskripsi', 'gambar'];

    protected $primaryKey = 'id';
}
