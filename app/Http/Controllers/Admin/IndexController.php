<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Real;
use App\Http\Model\User;
use Validator;
use Illuminate\Support\Facades\Crypt;
//use \Illuminate\Validation\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class IndexController extends CommonController
{
    public function index(){
//       $pdo= DB::connection()->getPdo();
//        dd($pdo);
        return view('admin.index');
    }//
    public function info(){
        return view('admin.info');
    }
    public function element(){
        return view('admin.element');
    }

//    public function map()
//    {
//        $loca=Real::all();
////        dd($loca);
//
//        return view('admin.map')->with('data',$loca);
//    }

    public function pass(){
        if ($input = Input::all()){
            $rules=[
               'password'=>'required|between:6,20|confirmed',
            ];
            $message=[
                'password.required'=>'新密码不能为空！',
                'password.between'=>'新密码长度必须在6到20位之间！',
                'password.confirmed'=>'新密码与确认密码不匹配！'

            ];
          $validator= Validator::make($input,$rules,$message);
            if ($validator->passes()){
                $user=User::where('user_name','=',session('user.user_name'))->first();
                $_password = Crypt::decrypt($user->user_password);
//                dd($_password);
                if ($input['password_o']==$_password){
                $user->user_password = Crypt::encrypt($input['password']);
                    $user->update();
//                    dd($user->user_password);

//
                    return back()->withErrors(['errors'=>'密码修改成功啦!']);
                }
                else{
                    return back()->withErrors(['errors'=>'原密码错误!']);
//                    return back();
                }
            }
            else{
//            return back()->withErrors($validator);
//                dd($validator->errors()->all());
                return back()
                    ->withErrors($validator);
            }
        }
        else{
            return view('admin.pass');
        }
    }
}


