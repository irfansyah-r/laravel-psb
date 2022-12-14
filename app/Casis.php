<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casis extends Model
{
    //
    protected $table = 'casis';
    protected $guarded = [''];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_casis');
    }

    public function prestasi()
    {
    	return $this->hasMany('App\Prestasi', 'id_casis');
    }
}
