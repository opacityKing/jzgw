<?php

namespace app\index\model;
use think\Model;

class Test extends Model
{
	
	static public function getip(){
		$IPList[] = gethostbynamel($_ENV['COMPUTERNAME']); //获取本机的局域网IP
		if(count($IPList)==1){
			foreach ($IPList as $IP){ 
		      if(stripos($IP,'192.168.1')){
		      	return $IP;
		      }
		    } 
		}else{
			return $IPList[0];
		}

	}
	
	  static public function device($recur)
    {
        $data = db('msg')
            ->alias('m')
            ->join('status s', 'm.deviceName=s.deviceName')
            ->whereOr(
                $recur
            )
            ->select();
        return $data;
    }
	 static public function deviceLists($recur)
    {
        $data = db('msg')
            ->alias('m')
            ->join('status s', 'm.deviceName=s.deviceName')
            ->whereOr(
                $recur
            )
            ->paginate(6);
        return $data;
    }
    static public function historical($dname){
    	$data=db($dname)->select();
    	return $data;
    }
    //select *from msg where ddd=1 or adaw=1 or dwd=1 
//  static public function test($recur)
//  {
//      $data = db('msg')
//          ->alias('a')
//          ->join('goods c', 'a.id=c.id')
//          ->where('a.id', 'in', $recur)
//          ->join('image k', 'c.goods_id=k.goods_id')
//          ->where('k.is_face', '0')
//          ->select();
//      return $data;
//  }
}