<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkouts extends Model
{
    protected $table='checkouts';

    protected $fillable=['first_name','last_name','company_name','phone_number','email_address','country','address','town','district','post_code','notes'];

    public $timestamps= true;

}