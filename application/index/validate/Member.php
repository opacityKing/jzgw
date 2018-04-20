<?php
namespace app\index\validate;
use think\Validate;
class Member extends Validate{
    //验证规则
    ///^1[34578]\d{9}$/
    protected $rule=[
        'username'=>'require|min:5|max:25|unique:member',
        'password'=>'require|min:6|max:20',
        'checkPassword'=>'require|confirm:password',
    ];
    //验证文字
    protected $message=[
        'username.require' => '用户名必须填写',
        'username.min' => '密码不得少于5个字符',
        'username.max' => '密码不得多于25个字符',
        'username.unique'  => '该用户名已注册过啦',
        'password.require' => '密码必填',
        'password.min' => '密码不得少于6个字符',
        'password.max' => '密码不得多于20个字符',
        'checkPassword.require' => '确认密码必填',
        'checkPassword.confirm' => '两次密码输入不一致',
    ];
    //验证场景
    protected $scene=[

        'register'=>['username','password','checkPassword']

    ];

}