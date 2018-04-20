<?php
namespace app\admin\controller;

use think\Controller;

class News extends Base
{
    /*
     * 增
     */
    public function add()
    {
//    接收参数
        if (request()->isPost()) {
            $newsData = [
                'title' => input('title'),
                'cateid' => input('cateid'),
                'source' => input('source'),
                'editor' => input('editor'),
                'content' => input('content'),
                'des' => input('des'),
            ];

            //        验证
            $validate = validate('news');
            if (!$validate->scene('add')->check($newsData)) {
                return $this->error($validate->getError());
            }


//        发布时间
            $newsData['time'] = time();


//        连接数据库
            $res = db('news')->insert($newsData);
            if ($res) {
                return $this->success('添加文章成功', url('News/index'));
            } else {
                return $this->error('添加文章失败', url('News/add'));
            }


        }
        //    查询所有栏目
        $cateData = db('cate c')
            ->where(array('c.parent_id' => 4))
            ->select();
        $this->assign('cateData', $cateData);
        return $this->fetch('News/add');
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
        $newsData = db('news')->find($id);
        $this->assign('newsData', $newsData);
        //    查询所有栏目

        $cateData = db('cate c')
            ->where(array('c.parent_id' => 4))
            ->select();
        $this->assign('cateData', $cateData);
        return $this->fetch();
    }

    public function doUpd()
    {
        $newsData = [
            'id' => input('id'),
            'title' => input('title'),
            'cateid' => input('cateid'),
            'des' => input('des'),
//            'keywords' => input('keywords'),
            'content' => input('content'),
            'source' => input('source'),
            'editor' => input('editor'),
        ];
//      $keywords=input('keywords');
//            把中文逗号转换成英文逗号
//      $keywords=str_replace('，',',',$keywords);
//            把转换完的关键字存到数据库
//      $articleData['keywords']=$keywords;

//        验证
        $validate = validate('news');
        if (!$validate->scene('upd')->check($newsData)) {
            return $this->error($validate->getError());
        }


//        修改数据
        $res = db('news')->update($newsData);
        if ($res !== false) {
            return $this->success('修改成功', url('News/index'));
        } else {
            return $this->error('修改失败');
        }

    }

    /*
     * 查
     */
    public function index()
    {
        $newsData = db('news')
            ->alias('n')
            ->field('n.id,n.title,n.source,n.time,n.editor,n.des,n.content,c.cate_name,c.cate_type')
            ->join('cate c', 'n.cateid=c.cate_id')
            ->paginate(10);
        $this->assign('newsData', $newsData);
        return $this->fetch();
    }
}