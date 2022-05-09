<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangterbuka extends Model
{
    use HasFactory;
    protected $table = 'ruangterbuka';
    protected $fillable = ['id','namart','deskripsi','gambar','gambar1','gambar2','gambar3'];
    protected $primaryKey = 'id';
}