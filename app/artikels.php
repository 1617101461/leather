<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikels extends Model
{
    protected $table='artikels';

    protected $fillable=['id_kategoriartikels','judul','gambar','deskripsi','publish'];

    public $timestamps= true;

    public function users()
    {
        return $this->belongsTo('App\User','id_users');
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
