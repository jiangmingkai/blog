<?php
/**
 * Created by PhpStorm.
 * User: jiangmingkai
 * Date: 2017/9/14
 * Time: 15:13
 */

namespace Auth\Controller;


class IndexController extends CommonController
{
    public function index(){

        return $this->display();
    }

    public function welcome()
    {
        date_default_timezone_set('PRC');
        $data = $_SERVER;
        $this->assign('data',$data);
        $info['ofo']=M('travel')->where('type = 1')->count();
        $info['mobike']=M('travel')->where('type = 2')->count();
        $info['didi']=M('travel')->where('type = 3')->count();
        $this->assign('info',$info);

        return $this->display();
    }
}