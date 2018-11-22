<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barangs extends Model
{
    protected $table='barangs';

    protected $fillable=['id_kategoris','gambar','nama_barang','harga','deskripsi'];

    public $timestamps= true;

    public function kategoris()
    {
        return $this->belongsTo('App\kategoris','id_kategoris');
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
