<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/13
 * Time: 21:24
 */

namespace Auth\Controller;
use Auth\Model\admin;
use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $_code = session('code');
        return $this->display();
    }

    public function Code()
    {
        $_vc = new \Org\Util\Code();
        $_vc->doimg();
       // echo $_vc->getCode();
        session('code', strtolower($_vc->getCode()));
    }

    public function Check()
    {
        $input['username'] = I('username');
        $input['password'] = I('password');
//        $input['code'] = I('code');
//        $session = $request->session()->all();
//        $_code = session('code');
//        if (strtolower($input['code']) == $_code) {
            $where['admin_name'] = $input['username'];
            $pwd = $input['password'];
            $user = M('admin')->where($where)->find();
            $pswd_open=md5($pwd);
////            $pswd_lock = Crypt::encrypt();//加密$pswd
//            $pswd_open = Crypt::decrypt($user->admin_password);
            if ($user['admin_password'] == $pswd_open) {
                if ($user['admin_show'] == 1) {
                    session('username', $input['username']);
                    echo  1;
                } else {
                    echo 3;
                }
            } else {
                echo 2;
            }
//        } else {
//            echo 0;
//        }
    }
}