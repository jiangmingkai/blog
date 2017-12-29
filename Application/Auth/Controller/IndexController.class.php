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

         $this->display();
    }
    /*
     * 欢迎页
     */
    public function welcome()
    {
        date_default_timezone_set('PRC');
        $data = $_SERVER;
        $this->assign('data',$data);
        $info['ofo']=M('travel')->where('type = 1')->count();
        $info['mobike']=M('travel')->where('type = 2')->count();
        $info['didi']=M('travel')->where('type = 3')->count();
        $this->assign('info',$info);
        $this->display();
    }

    /**
     * 修改个人资料
     */
    public function member(){
        $user=M('admin')->find();
        $this->assign('info',$user);
        $this->display();
    }

    public function save_member(){
        $data['admin_name']=$_POST['name'];
        $data['admin_pass']=$_POST['pass'];
        $data['admin_password']=md5($_POST['pass']);
        $save=M('admin')->where(array('admin_id'=>1))->data($data)->save();
        if($save){
            $this->ajaxReturn($save,'json');
        }
    }
}