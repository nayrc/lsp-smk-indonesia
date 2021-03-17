<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $timestamps = false;
    protected $table = 'siswa';
    protected $primaryKey = 'nis';
    protected $fillable = ['nis', 'nama', 'jk', 'alamat', 'id_kelas'];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'nis');
    }
}
