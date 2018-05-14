<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerbaikanStatus extends Model
{
    protected $table = 'perbaikan_status';

    public function perbaikanRuangan(){
        return $this->hasMany(\App\PerbaikanRuangan::class,'perbaikan_status_id');
    }
}
