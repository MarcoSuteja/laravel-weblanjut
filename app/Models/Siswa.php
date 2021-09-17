<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    
    use HasFactory;
    // Definisikan  data siswa 
    protected $table = 'siswa';
    public $timestamps = false;
    protected $primaryKey = 'id_siswa'; 
}
