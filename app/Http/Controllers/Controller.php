<?php

namespace App\Http\Controllers;

use App\Http\Model\Phone;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\DocBlockFactory;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return string
     */
    public function test()
    {
       if ($input = Input::all()
//           file_get_contents('http://202.121.50.112:1024/test/1')
    )
//
     {
//         $in=file_get_contents('http://202.121.50.112:1024/test/1');
//         json_decode($in,true);
//         $input=$in;
            $input=Input::all();
            $phone=Phone::first();
            $phone->phone_name=$input['admin'];
            $phone->phone_password=$input['password'];
            $phone->phone_number=$input['phonenum'];
            $phone->phone_email=$input['youxiang'];
            $phone->update();

        }
        else {
            $phone = DB::table('phone')->where('phone_name', 'admin')->first();
            echo $phone->phone_name;
        }
    }
}
