<?php

namespace app\index\widget;
use think\Controller;
//use app\index\model\Goods;
class Common extends Controller{

    public function header(){
        return $this->fetch('Common/header');
    }
    public function headerFluit(){
        return $this->fetch('Common/header_fluit');
    }
    public function headerIndex(){

        return $this->fetch('Common/header_index');
    }
    public function footerIndex(){

        return $this->fetch('Common/footer_index');
    }
}