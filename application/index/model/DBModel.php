<?php

namespace app\index\model;
use think\Model;

class DBModel extends Model
{
	static public function mainServerConfig($db){
    	$config = [
			    // 数据库类型
		    'type'        => 'mysql',
		    // 服务器地址
		    'hostname'    => '127.0.0.1',
		    // 数据库名
		    'database'    => $db,
		    // 数据库用户名
		    'username'    => 'root',
		    // 数据库密码
		    'password'    => 'Qaz2655256!',
		];
    	return $config;
    }
	static public function localServerConfig($db){
    	$config = [
			    // 数据库类型
		    'type'        => 'mysql',
		    // 服务器地址
		    'hostname'    => '120.78.174.246',
		    // 数据库名
		    'database'    => $db,
		    // 数据库用户名
		    'username'    => 'root',
		    // 数据库密码
		    'password'    => 'Qaz2655256!',
		];
    	return $config;
    }
	//对给定的条件查询
    static public function serch($table,$config,$field,$type,$condition,$order){
    	
    	$data = db($table,$config,false)->where($field,$type,$condition)->order($order . ' ASC ')->select();
    	return $data;
    }
	//两个条件验证查询
    static public function doubleConfirm($table,$config,$field_1,$value_1,$field_2,$value_2){
    	$data = db($table,$config,FALSE)->where($field_1,$value_1)->where($field_2,$value_2)->select();
    	return $data;
    }
	static public function serchField($table,$config,$serchField,$field,$type,$condition,$order){
    	$data = db($table,$config,false)->field($serchField)->where($field,$type,$condition)->order($order . ' ASC ')->select();
    	return $data;
    }
	
}