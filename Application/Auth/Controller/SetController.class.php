<?php
/**
 * Created by PhpStorm.
 * User: jiangmingkai
 * Date: 2017/9/14
 * Time: 16:15
 */

namespace Auth\Controller;

use Think\Page;

class SetController extends CommonController
{
    public function index()
    {
         $this->display();
    }

    public function cate()
    {
        $info=M("config")->where('id = 1')->find();
        $this->assign('info',$info);
         $this->display();
    }

    public function cate_check()
    {
        $input['config_title']=I('post.config_title');
        $input['config_abs']=I('post.config_abs');
        $input['config_url']=I('post.config_url');
        $input['config_key']=I('post.config_key');
        $input['config_num']=I('post.config_num');
        $input['config_cal']=I('post.config_cal');
        $input['config_title']=I('post.config_title');
        $save=M("config")->where('id = 1')->save($input);
        if($save){
             $this->ajaxReturn(1);
        }
    }
}