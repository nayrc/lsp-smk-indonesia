<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    public $timestamps = false;
    protected $table = 'mengajar';
    protected $fillable = ['nip', 'id_mapel', 'id_kelas'];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'nip');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
