<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Request;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User extends Base
{
    //登录界面
    public function  login()
    {
        return $this->view->fetch();
    }
    //验证登录
    public function  checklogin(Request $request)
    {
        //初始返回参数
        $status=0;
        $result="";
        $data=$request->param();
        //创建验证规则
        $rule=[
            'name|用户名'=>'require',
            'password|密码'=>'require',
            'verify|验证码'=>'require|captcha'
        ];
        //自定义验证失败的提示信息
        $msg=[
            'name'=>['require'=>'用户名不能为空，请重新输入'],
            'password'=>['require'=>'密码不能为空，请重新输入'],
            'verify'=>['require'=>'验证码不能为空，请重新输入'],
        ];
        //验证
        $result= $this->validate($data, $rule,$msg);
        //验证通过
        if($result){
            
        }
        return ['status'=>$status,'message'=>$result,'data'=>$data];
    }
    //退出
    public function  logout()
    {
        
    }
}
