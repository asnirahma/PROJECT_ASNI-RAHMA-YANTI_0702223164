<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;
    protected $fillable = ['no', 'id_prodi', 'nama_prodi', 'himpunan_mahasiswa'];
    protected $table = 'prodi';
    public $timestamps = false;
}
