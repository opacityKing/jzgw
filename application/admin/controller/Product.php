<?php

namespace app\admin\controller;

use think\Controller;

class Product extends Base
{
    /*
     * 增
     */
    public function add()
    {
//    接收参数
        if (request()->isPost()) {
            $productData = [
//                'pictures' => input('pictures'),
                'introduce' => input('introduce'),
//                'specification' => input('specification'),
                'comments' => input('comments'),
                'cateid' => input('cateid'),
            ];


//        更新时间
            $productData['time'] = time();
//        验证
            $validate = validate('product');
            if (!$validate->scene('add')->check($productData)) {
                return $this->error($validate->getError());
            }

//        连接数据库
            $res = db('product')->insert($productData);
            if ($res) {
                return $this->success('添加文章成功', url('Product/index'));
            } else {
                return $this->error('添加文章失败', url('Product/add'));
            }


        }
        //    查询所有栏目
        $cateData = db('cate_product c')
            ->where(array('c.cate_type' => 3))
            ->select();
        $this->assign('cateData', $cateData);
        return $this->fetch('product/add');
    }

    public function second($cate_id)
    {
        dump("o");
        dump($cate_id);
        $second = db('cate_product')->where(['parent_id' => $cate_id])->select();
        return json(
            $second
        );
    }

    public function third($cate_id)
    {
        $third = db('cate_product')->where(['parent_id' => $cate_id])->select();
        return json(
            $third
        );
    }

    /*
     * 删
     */
    public function del()
    {
        $id = input('id');
        $res = db('news')->delete($id);
        if ($res) {
            return $this->success('删除成功', url('News/index'));
        } else {
            return $this->error('删除失败');
        }
    }

    /*
     * 改
     */
    public function upd()
    {
        $id = input('id');
        $data = db('product')->find($id);
        $this->assign('data', $data);
        //    查询所有栏目

        $cateData = db('cate_product c')
            ->where(array('c.cate_type' => 3))
            ->select();
        $this->assign('cateData', $cateData);
        return $this->fetch();
    }

    public function doUpd()
    {
        $data = [
            'introduce' => input('introduce'),
            'comments' => input('comments'),
            'cateid' => input('cateid'),
            'id' => input('id'),
        ];
        //        更新时间
        $data['time'] = time();
//        验证
        $validate = validate('product');
        if (!$validate->scene('upd')->check($data)) {
            return $this->error($validate->getError());
        }


//        修改数据
        $res = db('product')->update($data);
        if ($res !== false) {
            return $this->success('修改成功', url('Product/index'));
        } else {
            return $this->error('修改失败');
        }

    }

    /*
     * 查
     */
    public function index()
    {
        $products = db('product')
            ->alias('p')
            ->field('p.id,p.pictures,p.introduce,p.service,p.comments,p.time,c.cate_id,c.parent_id,c.cate_name,c.cate_type')
            ->join('cate_product c', 'p.cateid=c.cate_id')
            ->paginate(10);
        $this->assign('products', $products);
        return $this->fetch();
    }

}