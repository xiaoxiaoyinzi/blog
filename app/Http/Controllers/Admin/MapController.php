<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Real;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class MapController extends CommonController
{
   public function index($id){
//       echo "$id";
       $loca=Real::find($id);
//       $loca=collect($loca);
       $loca=array($loca);

//       dd($loca);
       //使用admin/map.index视图时，注释掉上一行 ，使对象包在数组中；
//       return view('admin/map.index',compact('loca'));
       return view('admin/map.allmap')->with('data',$loca);
//
   }
    public function view()
    {
        $loca=Real::all();
//        dd($loca);

        return view('admin/map.allmap')->with('data',$loca);
    }
}
