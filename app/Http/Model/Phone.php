<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table='phone';//
    protected $primaryKey='phone_name';
    public $timestamps=false;////
}
