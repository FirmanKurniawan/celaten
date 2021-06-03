<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tahunakademik;

class Jadwal extends Model
{
    protected $guarded = [];

    public function tahunakademik()
    {
        return $this->belongsTo(Tahunakademik::class, 'tahun_akademik_id');
    }
}
