<?php

namespace app\index\controller;

use think\Controller;

class Register extends Controller
{
    public function index()
    {
        return $this->fetch('register');
    }


    public function register()
    {
        if (request()->isPost()) {
            $response = [
                'status' => 'error',
                'msg' => ''
            ];
            //获取数据
            $data = [
                'username' => input('inputName'),
                'password' => input('inputPassword1'),
                'checkPassword' => input('inputPassword2')
            ];


            //验证输入信息
            $validate = validate('Member');
            if (!$validate->scene('register')->check($data)) {
                //return $this->error($validate->getError());
                $response['msg'] = $validate->getError();
//              return json($response);
                return $this->error($response['msg']);
            }
            //保存数据
            $arr = [
                'username' => $data['username'],
                'password' => $data['password']
            ];
            $arr['password'] = md5($arr['password']);
            //返回这条记录的主键值
            $res = db('member')->insertGetId($arr);
            if ($res) {
                //return $this->success('注册成功', url('Login/index'));
                $response['status'] = 'success';
                $response['msg'] = '注册成功';
                //根据主键值查出用户信息
                $info = db('member')->find($res);
                //将用户信息保存在session 即注册成功后默认为已登录状态
                session('member', $info);
                session('code', null);
//              return json($response);
                return $this->success($response['msg'], 'index/index');
            } else {
                $response['msg'] = '注册失败';
//              return json($response);
                return $this->error($response['msg']);
                //return $this->error('注册失败');
            }
        }

        return $this->fetch('register');

    }


}