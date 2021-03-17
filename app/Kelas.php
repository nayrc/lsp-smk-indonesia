<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $timestamps = false;
    protected $table = 'kelas';
    protected $fillable = ['nama', 'id_jurusan'];
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function mengajar()
    {
        return $this->hasMany(Mengajar::class);
    }
}
