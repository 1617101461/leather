<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    protected $table='carts';

    protected $fillable=['id_barangs','id_users','jumlah','subtotal', 'slug'];

    public $timestamps= true;

    public function barangs()
    {
        return $this->belongsTo('App\barangs','id_barangs');
    }

    public function users()
    {
        return $this->belongsTo('App\User','id_users');
    }
}
