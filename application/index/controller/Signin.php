<?php

namespace app\index\controller;

use think\Controller;

class Signin extends Controller
{
    public function index()
    {
        return $this->fetch('signin/signin');
    }

    public function doSignin()
    {
        //获取参数
        $data = [
            'username' => input('uname'),
            'password' => input('pword'),
        ];
        //验证是否为空
        if (!$data['username']) {
            return $this->error('用户名不能为空');
        }
        if (!$data['password']) {
            return $this->error('密码不能为空');
        }
        //链接数据库
        $info = db('member')->where(array('username' => $data['username']))->find();
        //验证用户名
        if ($data['username'] != $info['username']) {
            return $this->error("用户名或密码错误", 'Signin/index');
        }

        //验证密码
        if (md5($data['password']) != $info['password']) {
//          if ($data['password']!=$info['password']){
            return $this->error("用户名或密码错误", 'Signin/index');
        }

        //登录成功后  将用户信息存到session
        session('member', $info);


        //成功返回

//      return $this->success('登录成功 正在跳转...',url('Project/index'));
//        查出首页所需产品数据
        $data = db('cate_product')
            ->alias('c')
            ->field('c.cate_id,c.parent_id,c.cate_name,c.cate_type,c.cate_des,c.cate_pic')
            ->where(array('c.cate_type' => 1))
            ->select();
        $this->assign('data', $data);
        return $this->fetch('index/index');


    }


    //退出登录
    public function signout()
    {
        session('member', null);
        return $this->redirect('Index/index');

    }

}