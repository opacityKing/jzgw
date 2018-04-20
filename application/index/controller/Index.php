<?php

namespace app\index\controller;

use think\Controller;

class Index extends Controller
{

    public function index()
    {
        //锦众要闻
        $newsData1 = db('news')
            ->alias('n')
            ->field('n.id,n.title,n.time,n.cateid,n.des')
            ->join('cate c', 'n.cateid=c.cate_id', 'left')
            ->where(array('n.cateid' => 12))
            ->order('time DESC')
            ->paginate(5);
        $this->assign('newsData1', $newsData1);
        //行业资讯
        $newsData2 = db('news')
            ->alias('n')
            ->field('n.id,n.title,n.time,n.cateid')
            ->join('cate c', 'n.cateid=c.cate_id', 'left')
            ->where(array('n.cateid' => 13))
            ->order('time DESC')
            ->paginate(4);
        $this->assign('newsData2', $newsData2);
        //公告通知
        $newsData3 = db('news')
            ->alias('n')
            ->field('n.id,n.title,n.time,n.cateid')
            ->join('cate c', 'n.cateid=c.cate_id', 'left')
            ->where(array('n.cateid' => 14))
            ->order('time DESC')
            ->paginate(2);
        $this->assign('newsData3', $newsData3);
        //产品

        $data = db('cate_product')
            ->alias('c')
            ->field('c.cate_id,c.parent_id,c.cate_name,c.cate_type,c.cate_des,c.cate_pic')
            ->where(array('c.cate_type' => 1))
            ->select();
        $this->assign('data', $data);

        return $this->fetch('index/index');

    }

    public function product()
    {
        //        接收栏目id
        $cid = input('cid');
        $pid = input('pid');
        if ($pid == 0) {
            $pname = db('cate')->field('cate.cate_name')->where(array('cate.cate_id' => $cid))->select();
            $hid = db('article')->alias('a')->field('a.html_id')->join('cate c', 'a.cateid=c.cate_id', 'left')->where(array('c.parent_id' => $cid))->select();

//      	halt($hid[0]);
        } else {
            $pname = db('cate')->field('cate.cate_name')->where(array('cate.cate_id' => $pid))->select();
            $hid = db('article')->field('article.html_id')->where(array('article.cateid' => $cid))->select();

        }
//      $face=db('article')->field('article.pic')->where(array('article.cateid'=>$cid))->select();
        $pid = $pid == 0 ? $cid : $pid;
        //        查出栏目名称
//      $cate=db('cate')->where(array('parent_id'=>$pid))->find();
//      $this->assign('cate',$cate);
        //        查出文章详情
        $articleData = db('article')
            ->alias('a')
            ->field('a.title,a.content,a.time,a.pic,a.cateid,a.html_id,c.cate_id,c.parent_id,c.cate_name')
            ->join('cate c', 'a.cateid=c.cate_id', 'left')
            ->where(array('c.parent_id' => $pid))
            ->select();
        $this->assign('pname', $pname[0]["cate_name"]);
//      $this->assign('face', $face[0]["pic"]);
        $this->assign('hid', $hid[0]["html_id"]);

        $this->assign('cid', $cid);
        $this->assign('articleData', $articleData);
        //如果打开的是新闻中心及其子页面
        if ($pid == 4) {
            $newsData0 = db('news')
                ->alias('n')
                ->field('n.id,n.title,n.time,n.cateid,n.des')
                ->join('cate c', 'n.cateid=c.cate_id', 'left')
                ->where(array('n.cateid' => 12))
                ->order('time DESC')
                ->paginate(5);
            $this->assign('newsData0', $newsData0);
            $newsData1 = db('news')
                ->alias('n')
                ->field('n.id,n.title,n.time,n.cateid,n.des')
                ->join('cate c', 'n.cateid=c.cate_id', 'left')
                ->where(array('n.cateid' => 13))
                ->order('time DESC')
                ->paginate(5);
            $this->assign('newsData1', $newsData1);
            $newsData2 = db('news')
                ->alias('n')
                ->field('n.id,n.title,n.time,n.cateid,n.des')
                ->join('cate c', 'n.cateid=c.cate_id', 'left')
                ->where(array('n.cateid' => 14))
                ->order('time DESC')
                ->paginate(5);
            $this->assign('newsData2', $newsData2);
            return $this->fetch('index/news_center');

        }
//        如果要打开的是联系我们
        if ($cid == 18) {
            return $this->fetch('index/contact');

        }

        return $this->fetch('index/product');

    }

//联系我们地图通过iframe打开
    public function jzmap()
    {
        return $this->fetch('index/jzmap');

    }

    public function news()
    {
        //        接收栏目id
        $cid = input('cid');
        $id = input('id');
        //        查出文章详情
        $newsData = db('news')
            ->alias('n')
            ->field('n.title,n.content,n.time,n.source,n.editor,n.des')
            ->where(array('n.id' => $id))
            ->select();
        $this->assign('newsData', $newsData[0]);
        return $this->fetch('index/news');

    }

    public function psecond()
    {
        //        接收一级产品分类id
        $cid = input('cid');
        $pid = input('pid');
        $data = db('cate_product')
            ->alias('c')
            ->field('c.cate_id,c.parent_id,c.cate_name,c.cate_type,c.cate_des,c.cate_pic')
            ->where(array('c.parent_id' => $cid))
            ->select();
        $this->assign('data', $data);
        $breadname1 = db('cate_product n')
            ->where(array('n.cate_id' => $cid))
            ->select();
        $breadname1 = $breadname1[0]['cate_name'];
        $this->assign('breadname1', $breadname1);
        return $this->fetch('index/psecond');

    }

    public function pthird()
    {
        //        接收二级产品分类id
        $cid = input('cid');
        $pid = input('pid');
        $data = db('cate_product')
            ->alias('c')
            ->field('c.cate_id,c.parent_id,c.cate_name,c.cate_type,c.cate_des,c.cate_pic')
            ->where(array('c.parent_id' => $cid))
            ->select();
        $this->assign('data', $data);
        $breadname1 = db('cate_product n')
            ->where(array('n.cate_id' => $pid))
            ->select();
        $breadname1 = $breadname1[0]['cate_name'];
        $breadname2 = db('cate_product n')
            ->where(array('n.cate_id' => $cid))
            ->select();
        $breadname2 = $breadname2[0]['cate_name'];
        $this->assign('breadname1', $breadname1);
        $this->assign('breadname2', $breadname2);
        return $this->fetch('index/pthird');

    }

    public function pdetails()
    {
        //        接收三级产品详情分类id
        $cid = input('cid');
        $pid = input('pid');
        $data = db('cate_product')
            ->alias('c')
            ->field('c.cate_id,c.parent_id,c.cate_name,c.cate_type,c.cate_des,c.cate_pic,c.pic_detail,p.introduce')
            ->join('product p', 'p.cateid=c.cate_id', 'left')
            ->where(array('c.cate_id' => $cid))
            ->select();
        $this->assign('data', $data[0]);
//        产品详情图片
        $pic=$data[0]['pic_detail'];
        $pic=explode(",",$pic);
        $this->assign('pdata', $pic);

//        对应产品的规格参数
        $sdata = db("$cid")
            ->alias('s')
            ->field('s.specification_name,s.specification_value')
            ->select();
        $this->assign('sdata', $sdata);

//面包屑导航部分各级导航名
        $breadname2 = db('cate_product n')
            ->where(array('n.cate_id' => $pid))
            ->select();
        $a = $breadname2[0]['parent_id'];
        $breadname1 = db('cate_product n')
            ->where(array('n.cate_id' => $a))
            ->select();
        $bpid = $breadname1[0]['parent_id'];
        $bcid = $breadname1[0]['cate_id'];
        $breadname1 = $breadname1[0]['cate_name'];

        $breadname2 = $breadname2[0]['cate_name'];
        $this->assign('bpid', $bpid);
        $this->assign('bcid', $bcid);

        $this->assign('breadname1', $breadname1);
        $this->assign('breadname2', $breadname2);

        return $this->fetch('index/pdetails');

    }
}