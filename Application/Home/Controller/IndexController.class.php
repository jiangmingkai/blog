<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends CommonController
{
    public function index()
    {
        $top = M('new')->where(array('new_top' => 1))->order('new_id desc')->select();
        $new = M('new  as  a')->where(array('new_top' => 0))->order('new_id desc')->join('tbl_new_type  as  b  on a.new_type = b.id')->limit(10)->select();
        $this->assign('new', $new);
        $this->assign('top', $top);
        return $this->display();
    }

    public function info()
    {

        $id = $_GET['id'];
        $new = M('new as a')->where(['new_id' => $id])->join('tbl_new_type  as  b  on a.new_type = b.id')->find();
        $news = M('new')->where(['new_type' => $new['new_type']])->limit(8)->order('new_create_time desc')->field('new_id,new_title')->select();
        foreach ($news as $k=>$v) {
            if($v['new_id'] == ((int)$new['new_id'])){
                $next=$news[($k-1)];
                $prev = $news[($k+1)];
            }
        }
        $this->assign('new', $new);
        $this->assign('news', $news);
        $this->assign('prev', $prev);
        $this->assign('next', $next);
        return $this->display();
    }
}