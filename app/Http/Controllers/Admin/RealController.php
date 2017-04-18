<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Real;
//use Illuminate\Contracts\Validation\Validator;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Storage;
use App\Http\Requests;

class RealController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    get.admin/real 全部数据列表
    public function index()
    {
//        $reals=Real::orderBy('real_order','asc')->get();
//        return view('admin.real.index')->with('data',$reals);

        $reals=Real::orderBy('real_order','asc')->paginate(14);
        return view('admin.real.index')->with('data',$reals);


    }
    //    get.admin/real 全部数据列表
    public function changeorder()
    {
        $input=Input::all();
        $real=Real::find($input['id']);
        $real->real_order=$input['real_order'];
        $re=$real->update();
        if ($re){
            $data=['status'=>0,
            'msg'=>'排序成功'];
        }else{
            $data=['status'=>1,
                'msg'=>'排序失败'];
        }
        return $data;
//        echo $re;
//        echo $input['id'];

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    get.admin/real/create
    public function create()
    {
        return view('admin/real/add');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//post.admin/real 添加设备
    public function store(Request $request)
    {
        $input = Input::except('_token');//

//        dd($input);



        $rules = [
            'equip_number' => 'required|digits:11',
            'longitude'=>'required',
            'latitude'=>'required',
            'install_address'=>'required',
            'category'=>'required',


        ];
        $message = [
            'equip_number.required' => '设备编号不能为空！',
            'equip_number.digits' => '设备编号长度必须是11位数字',
            'longitude.required'=>'经度不能为空',
            'latitude.required'=>'纬度不能为空',
            'install_address.required'=>'安装地址不能为空',
            'category.required'=>'产品类型必须选择',

        ];

        $validator =  Validator::make($input, $rules, $message);
        if ($validator->passes()) {
//            echo "通过";
            $re=Real::create($input);
            if ($re)
            {
                return redirect('admin/real');
            }
            else{
                return back()->with('errors','设备添加失败，但请不要放弃，等会再试试。');
            }
        } else {
            return back()->withErrors($validator);
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    get.admin/real{real}
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // get.admin/real{real}/edit
    public function edit($id)
    {
//       echo "你准备修改的设备id是".$id;//
        $field=Real::find($id);
//        dd($field);
    return view('admin/real.edit',compact('field'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
// put.admin/real{real}
    public function update(Request $request, $id)
    {
        $input= Input::except('_token','_method');
        $re=Real::where('id',$id)->update($input);
    if ($re){
        return redirect('admin/real');
    }else{
        return back()->with('errors','设备修改失败，但请不要放弃，等会再试试。');
    }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // delete.admin/real{real}
    public function destroy($id)
    {
//        delete不能使用静态方法调用
        $re=Real::where('id',$id)->delete($id);
        if ($re){
            $data = [
              'status'=> 0,
                'msg'=> '设备删除成功!',
            ];
        }else{
            $data = [
              'status'=>1,
                'msg'=>'设备删除失败，但请不要放弃，稍后再试哦！',
            ];
        }
        return $data;
//       echo 15465; //
    }

//    public function receive()
//    {
//       return Input::all();
//    }
}
