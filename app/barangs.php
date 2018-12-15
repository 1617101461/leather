<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barangs extends Model
{
    protected $table='barangs';

    protected $fillable=['id_kategoris','kode_barang','gambar','nama_barang','deskripsi','harga','stok'];

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
