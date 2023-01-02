<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'email',
        'nama_depan',
        'nama_belakang',
        'tanggal_lahir',
        'NIK'
    ];
    protected $dates = ['deleted_at'];
}
