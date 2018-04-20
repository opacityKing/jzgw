<?php

namespace app\admin\validate;

use think\Validate;

class News extends Validate
{
    protected $rule = [
        'title' => 'require|max:50|unique:news',
        'cateid' => 'require',
        'des' => 'require',
        'content' => 'require',
        'source' => 'require|max:20',
        'editor' => 'require|max:20',
    ];
    protected $message = [
        'title.require' => '文章名必填',
        'title.max' => '文章名不得超过50个字符',
        'title.unique' => '文章名必须唯一',
        'cateid.require' => '所属栏目必填',
        'des.require' => '文章摘要必填',
        'content.require' => '文章详情必填',
        'source.max' => '信息来源不得超过20个字符',
        'editor.max' => '责任编辑不得超过20个字符',
    ];
    protected $scene = [
        'add' => ['title', 'cateid','des', 'content', 'source','editor'],
        'upd' => ['title', 'cateid','des', 'content', 'source','editor'],
    ];

}