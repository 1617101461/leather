<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonis extends Model
{
    protected $table='testimonis';

    protected $fillable=['testimoni'];

    public $timestamps= true;
}
