<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public $timestamps = false;
    protected $table = 'nilai';
    protected $fillable = ['uh', 'uts', 'uas', 'na', 'id_mengajar', 'nis'];
    public function mengajar()
    {
        return $this->belongsTo(Mengajar::class, 'id_mengajar');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis');
    }
}
