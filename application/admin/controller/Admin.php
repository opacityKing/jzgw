<?php

//管理员模块，主要方法有管理员信息的增删改查加验证
namespace app\admin\controller;

use think\Db;
use app\admin\controller\Base;

class Admin extends Base
{
//    增
    public function add()
    {
//        判断是不是post提交的
        if (request()->isPost()) {
            $data = [
                'username' => input('username'),
                'password' => input('password')
            ];
//            验证----独立验证
//            $validate=new \think\Validata([
//                'username'=>'require|max:25',
//                'password'=>'require|min:6'
//            ]);
//            if (!$validate->check($data)) {
//                 return $this->error($validate->getError());
//            }
//            验证---验证器验证
            $validate = validate('Admin');
            $result = $validate->scene('add')->check($data);
            if (!$result) {
                return $this->error($validate->getError());
            }

            $data['password'] = md5($data['password']);
            $res = Db::name('admin')->insert($data);
            if ($res) {
                return $this->success('添加成功', url('Admin/lists'));
            } else {
                return $this->error('添加失败');
            }
        }
        return $this->fetch();
    }

//    删
    public function del()
    {
        $id = input('id');
        if ($id == 1) {
            return $this->error('超级管理员不能被删除');
        }
        $res = Db::name('admin')->delete($id);
        if ($res) {
            return $this->success('删除成功', url('Admin/lists'));
        } else {
            return $this->success('删除失败');
        }

    }

//    改
    public function upd()
    {
        $id = input('id');
        $data = Db::name('admin')->find($id);
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function doUpd()
    {
        $data = [
            'id' => input('id'),
            'username' => input('username')
        ];
        $password = input('password');
        if ($password != '') {
            $data['password'] = md5($password);
        }
        $res = Db::name('admin')->update($data);
        if ($res !== false) {
            return $this->success('修改成功', url('lists'));
        } else {
            return $this->error('修改失败');
        }
    }

//   查
    public function index()
    {
        $data = Db::name('admin')->paginate(5);
        $this->assign('data', $data);
        return $this->fetch('lists');
    }

    //   进入项目
    public function project()
    {
        return $this->fetch('project');
    }

//    退出登录
    public function logout()
    {
        session('admin', null);
//        return $this->success('登出成功',url('Login/login'));
        return $this->redirect('Login/login');
    }

}