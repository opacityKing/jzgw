<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/16
 * Time: 8:00
 */
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate {
    protected $rule = [
        'username'  =>  'require|max:25|unique:admin',
        'password' =>  'require|min:6',
    ];

    protected $message = [
        'username.require'  =>  '用户名必须',
        'username.max'     => '名称最多不能超过25个字符',
        'username.unique'  =>  '用户名必须唯一',
        'password.require' =>  '密码必须',
        'password.min' =>  '密码不能少于6个字符',
    ];

    protected $scene = [
        'add'   =>  ['username','password'],
        'upd'   =>  ['username'],

    ];

}