<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeris extends Model
{
    protected $table='galeris';

    protected $fillable=['gambar'];

    public $timestamps= true;
}
