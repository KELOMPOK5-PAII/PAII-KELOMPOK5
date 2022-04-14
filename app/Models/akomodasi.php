<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akomodasi extends Model
{
    use HasFactory;
    protected $table = 'akomodasi';
    protected $fillable = ['id', 'judul', 'foto'];
    protected $primaryKey = 'id';
}
