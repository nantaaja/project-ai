<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductivityLog extends Model
{
    protected $fillable = [
        'lama_waktu',
        'penggunaan_buku',
        'intensitas_device',
        'tingkat_interaksi',
        'tingkat_fokus',
        'label_hasil'
    ];
}
