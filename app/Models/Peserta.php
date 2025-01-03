<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nilai', 'surat_dokter', 'zonasi', 'kelulusan'
    ];

    public function getPrioritasAttribute()
    {
        $nilai = $this->nilai;
        $surat_dokter = $this->surat_dokter;
        $zonasi = $this->zonasi;
        $kelulusan = $this->kelulusan;

        return ($nilai * 0.3) + ($surat_dokter * 0.25) + ($zonasi * 0.2) + ($kelulusan * 0.25);
    }
}
