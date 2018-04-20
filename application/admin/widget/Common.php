<?php

namespace app\admin\widget;
use think\Controller;
class Common extends Controller{

    public function header(){
        return $this->fetch('common/header');
    }
    public function headerIndex(){
        return $this->fetch('common/header_Index');
    }
    public function left(){
        return $this->fetch('common/page_sidebar');
    }

}