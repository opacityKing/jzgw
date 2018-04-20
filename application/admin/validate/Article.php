<?php
namespace app\admin\validate;

use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'title' => 'require|max:50',
        'html_id' => 'require|max:20|unique:article|alpha',
        'cateid' => 'require|unique:article',
        'content' => 'require',
    ];
    protected $message = [
        'title.require' => '文章名必填',
        'title.max' => '文章名不得超过50个字符',
        'html_id.require' => '网页ID必填',
        'html_id.max' => '网页ID不得超过20个字符',
        'html_id.unique' => '网页ID必须唯一',
        'html_id.alpha' => '网页ID只能由字母组成',
        'cateid.require' => '所属栏目必填',
        'content.require' => '文章详情必填',
    ];
    protected $scene = [
        'add' => ['title', 'cateid', 'content', 'html_id'],
        'upd' => ['title', 'cateid', 'content', 'html_id'],
    ];

}