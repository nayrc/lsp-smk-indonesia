<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    public $timestamps = false;
    protected $table = 'mapel';
    protected $fillable = ['nama'];

    public function mengajar()
    {
        return $this->hasMany(Mengajar::class);
    }
}
