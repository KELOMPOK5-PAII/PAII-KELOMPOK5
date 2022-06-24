<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laboratorium extends Model
{
    use HasFactory;
    protected $table = 'laboratorium';
    protected $fillable = ['id', 'namalab', 'deskripsi', 'gambar', 'gambar1'];
    protected $primaryKey = 'id';
}
