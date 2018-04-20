<?php

namespace app\admin\validate;

use think\Validate;

class Product extends Validate
{
    protected $rule = [
        'cateid' => 'unique:product'
    ];
    protected $message = [
        'cateid.unique' => '产品名必须唯一',
    ];
    protected $scene = [
        'add' => [ 'cateid'],
        'upd' => [ 'cateid'],
    ];

}