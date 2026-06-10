<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = 'konsultasi';

    protected $fillable = [

        'nama_pasien',

        'jenis_kelamin',

        'tempat_lahir',

        'tanggal_lahir',

        'tinggi_badan',

        'berat_badan',

        'alamat',

        'hasil_diagnosa',

        'persentase'
    ];

    public function detail()
    {
        return $this->hasMany(DetailKonsultasi::class);
    }
}