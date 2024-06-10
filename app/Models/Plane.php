<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;

    // Define the table name if it differs from the default naming convention
    protected $table = 'planes';

    // Define the primary key field if it differs from the default 'id'
    protected $primaryKey = 'id_pesawat';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'nama_pesawat',
        'kapasitas',
        'jenis_pesawat',
        'tanggal_pembuatan',
        'nomor_registrasi',
    ];

    // Specify the attributes that should be cast to native types
    protected $casts = [
        'tanggal_pembuatan' => 'date',
    ];
}
