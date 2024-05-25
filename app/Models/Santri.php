<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santris';

    protected $fillable = [
        'username',
        'password',
        'nama_santri',
        'jenis_kelamin',
        'cabang_idn_id',
        'program_idn',
        'bukti_transfer'
    ];

    public function cabangIdn()
    {
        return $this->belongsTo(CabangIdn::class, 'cabang_idn_id');
    }
}
