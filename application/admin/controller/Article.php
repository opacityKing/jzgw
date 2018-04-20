<?php
namespace app\admin\controller;

use think\Controller;

class Article extends Base
{
    /*
     * 增
     */
    public function add()
    {
//    接收参数
        if (request()->isPost()) {
            $articleData = [
                'title' => input('title'),
                'cateid' => input('cateid'),
                'content' => input('content'),
                'html_id' => input('html_id'),
            ];

            //        验证
            $validate = validate('article');
            if (!$validate->scene('add')->check($articleData)) {
                return $this->error($validate->getError());
            }


//        发布时间
            $articleData['time'] = time();

//        判断有没有图片上传
            if ($_FILES['pic']['tmp_name'] != '') {
                $arr = $this->upload('pic');
                if ($arr['status'] == 'success') {
                    $articleData['pic'] = $arr['url'];
                } else {
                    return $this->error($arr['msg']);
                }
            }

//        连接数据库
            $res = db('article')->insert($articleData);
            if ($res) {
                return $this->success('添加文章成功', url('Article/index'));
            } else {
                return $this->error('添加文章失败', url('Article/add'));
            }


        }
        //    查询所有栏目
        $cateData = db('cate c')
            ->where(array('c.cate_type' => 2))
            ->select();
        $this->assign('cateData', $cateData);
        return $this->fetch('Article/add');
    }

//        add添加里的图片处理方法
    private function upload($filename)
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file($filename);

        // 移动到框架应用根目录/public/uploads/ 目录下
        if ($file) {
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info) {
                // 成功上传后 获取上传信息
                // 输出 jpg
//                    echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg

                $url = '/uploads/' . $info->getSaveName();
                $url = str_replace('\\', '/', $url);
                return [
                    'status' => 'success',
                    'url' => $url
                ];

            } else {
                // 上传失败获取错误信息
                return [
                    'status' => 'error',
                    'msg' => $file->getError()
                ];

            }
        }
    }

    /*
     * 删
     */
    public function del()
    {
        $id = input('id');
        $picData = db('article')->field('pic')->find($id);
        $pic = $picData['pic'];
//        删除图片要先删图片再删字段值
        @unlink('.' . $pic);
        $res = db('article')->delete($id);
        if ($res) {
            return $this->success('删除成功', url('Article/index'));
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
        $articleData = db('article')->find($id);
        $this->assign('articleData', $articleData);
        //    查询所有栏目

        $cateData = db('cate c')
            ->where(array('c.cate_type' => 2))
            ->select();
        $this->assign('cateData', $cateData);
        return $this->fetch();
    }

    public function doUpd()
    {
        $articleData = [
            'id' => input('id'),
            'title' => input('title'),
            'cateid' => input('cateid'),
//          'des' => input('des'),
//            'keywords' => input('keywords'),
            'content' => input('content'),
            'html_id' => input('html_id'),
        ];
//      $keywords=input('keywords');
//            把中文逗号转换成英文逗号
//      $keywords=str_replace('，',',',$keywords);
//            把转换完的关键字存到数据库
//      $articleData['keywords']=$keywords;

//        验证
        $validate = validate('Article');
        if (!$validate->scene('upd')->check($articleData)) {
            return $this->error($validate->getError());
        }

//        判断有没有图片上传
        if ($_FILES['pic']['tmp_name'] != '') {
            $arr = $this->upload('pic');
//            如果上传成功
            if ($arr['status'] == 'success') {
                //删除原先的图片 unlink
                $picData = db('article')->field('pic')->find($articleData['id']);
                $pic = $picData['pic'];
                @unlink('.' . $pic);
                $articleData['pic'] = $arr['url'];
            } else {
                return $this->error($arr['msg']);
            }
        }
//        修改数据
        $res = db('article')->update($articleData);
        if ($res !== false) {
            return $this->success('修改成功', url('Article/index'));
        } else {
            return $this->error('修改失败');
        }

    }

    /*
     * 查
     */
    public function index()
    {
        $articleData = db('article')
            ->alias('a')
            ->field('a.id,a.title,a.time,a.pic,a.content,a.html_id,c.cate_name,c.cate_type')
            ->join('cate c', 'a.cateid=c.cate_id')
            ->paginate(10);
        $this->assign('articleData', $articleData);
        return $this->fetch();
    }
}