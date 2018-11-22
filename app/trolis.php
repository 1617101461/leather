<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trolis extends Model
{
    class trolis extends Model
{
    protected $table='trolis';

    protected $fillable=['id_barangs','jumlah','subtotal'];

    public $timestamps= true;

    public function barangs()
    {
        return $this->belongsTo('App\barangs','id_barangs');
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
}
