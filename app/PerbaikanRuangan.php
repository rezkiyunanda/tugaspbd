<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerbaikanRuangan extends Model
{
    protected $table = 'perbaikan_ruangan';

    protected $fillable = [
       'ruangan_id','tanggal_pengajuan','pengaju_id','alasan','perbaikan_status_id','status_pengajuan','tanggal_perbaikan','tanggal_selesai_perbaikan'
    ];

     
    public function ruangan(){
    	return $this->belongsTo(\App\Ruangan::class,'ruangan_id');
    }

     public function user(){
    	return $this->belongsTo(\App\User::class,'pengaju_id');
    }

     public function perbaikanStatus(){
    	return $this->belongsTo(\App\PerbaikanStatus::class,'perbaikan_status_id');
    }
}
