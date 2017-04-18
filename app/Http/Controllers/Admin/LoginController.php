<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

require  '..\resources\org\code\Code.class.php';

class LoginController extends CommonController
{
    public  function  login(){
        if ($input = Input::all()){
            $code=new \Code;
            $_code= $code->get();
            if (strtoupper($input['code'])!=$_code)
            {return  back()->with('msg', '验证码错啦！');}
            $user=User::where('user_name','=',$input['user_name'])->first();
            if ($user->user_name!=$input['user_name']||Crypt::decrypt($user->user_password)!=$input['user_password'])
            {return  back()->with('msg', '用户名与密码不匹配！');}
           session(['user'=>$user]);
//            dd(session('user'));

            return redirect('admin/index');
//            return view('admin.real.index');
        }
            else {
//                session(['user'=>null]);
                return view('admin.login');
            }
    }//
    public  function  quit(){
        session(['user'=>null]);
        return redirect('admin/login');
    }//
    public  function  code(){
        $code=new \Code;
        $code->make();
    }//
//   密码测试
    /*public  function  crypt(){
        $str='lwh';
        $str1=Crypt::encrypt($str);
      echo "$str1";
        echo '<br>';
        echo Crypt::decrypt($str1);
    }*///
  /*  public  function  getcode(){
        $code=new \Code;
        echo $code->get();
    }*/

}
