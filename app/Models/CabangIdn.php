<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabangIdn extends Model
{
    use HasFactory;

    protected $table = 'cabang_idn';

    protected $fillable = [
        'nama_cabang',
        'kuota_tkj',
        'kuota_rpl',
        'kuota_dkv',
        'kuota_smp'
    ];

    public function santris()
    {
        return $this->hasMany(Santri::class);
    }
}
