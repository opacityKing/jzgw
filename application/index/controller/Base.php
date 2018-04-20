<?php

namespace app\index\controller;

use think\Controller;

class Base extends Controller{


    public function _initialize()
    {
        parent::_initialize();
          $member = session('member');
          if (empty($member) || !isset($member)) {
              return $this->error('请先登录', url('Signin/index'));
          }
    }
//判断会员是否登录
    public function isLogin(){
        $index=session('member');
        if(!empty($index)){
            return $index;
        }else{
            return false;
        }
    }

}