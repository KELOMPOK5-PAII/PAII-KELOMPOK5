<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gedung extends Model
{
    use HasFactory;
    protected $table = 'gedung';
    protected $fillable = ['id', 'namagedung','gambar', 'gambar1','jamoperasional','aturan'];
    protected $primaryKey = 'id';
}
