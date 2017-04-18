<?php

namespace App\Http\Model;

    use Illuminate\Database\Eloquent\Model;

class Real extends Model
{
    protected $table='realtime_date';//
    protected $primaryKey='id';
    public $timestamps=false;//
    protected $guarded=[];
}
