<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // Define the table name if it differs from the default naming convention
    protected $table = 'schedules';

    // Define the primary key field if it differs from the default 'id'
    protected $primaryKey = 'id_schedule';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'id_pesawat',
        'tanggal_keberangkatan',
        'waktu_keberangkatan',
        'bandara_asal',
        'bandara_tujuan',
    ];

    // Specify the attributes that should be cast to native types
    protected $casts = [
        'tanggal_keberangkatan' => 'date',
    ];

    // Define the relationship with the Plane model
    public function plane()
    {
        return $this->belongsTo(Plane::class, 'id_pesawat', 'id_pesawat');
    }
}
