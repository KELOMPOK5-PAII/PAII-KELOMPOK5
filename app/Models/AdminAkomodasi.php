<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAkomodasi extends Model
{
    use HasFactory;
    protected $table = 'akomodasi';

    protected $fillable = ['id', 'judul', 'foto', 'link'];

    protected $primaryKey = 'id';
}
