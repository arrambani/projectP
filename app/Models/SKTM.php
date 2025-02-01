<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKTM extends Model
{
    use HasFactory;
    protected $table ='sktm_registrations';

    protected $fillable = ['no', 'nik', 'nama', 'jenis_kelamin', 'pekerjaan', 'dusun', 'desa', 'keterangan'];
}
