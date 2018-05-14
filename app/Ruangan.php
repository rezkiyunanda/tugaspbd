<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';


    public function perbaikanRuangan()
    {
    	return $this->hasMany(\App\PerbaikanRuangan::class,'ruangan_id');
    }
}
