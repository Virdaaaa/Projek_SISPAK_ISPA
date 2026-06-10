<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailKonsultasi extends Model
{
    protected $table = 'detail_konsultasi';

    protected $fillable = [

        'konsultasi_id',

        'gejala_id',

        'cf_user'
    ];

    public function konsultasi()
    {
        return $this->belongsTo(Konsultasi::class);
    }

    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }
}