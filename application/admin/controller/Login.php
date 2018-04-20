<?php

namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
    public function login()
    {
        return $this->fetch('login:login');
    }

    public function doLogin()
    {
        $data = [
            'username' => input('username'),
            'password' => input('password')
        ];
        if (!$data['username']) {
            return $this->error('用户名不能为空');
        }
        if (!$data['password']) {
            return $this->error('密码不能为空');
        }
    
        $info = db('admin')->where(array('username' => $data['username']))->find();
        if (!isset($info) || empty($info)) {
            return $this->error('用户名或密码错误');
        }
        if ($info['password'] != md5($data['password'])) {
            return $this->error('用户名或密码错误');
        }
//     登录成功以后  把用户信息保存到session
        session('admin', $info);
        return $this->success('登录成功，正在跳转~~~', url('Index/index'));
    }

}