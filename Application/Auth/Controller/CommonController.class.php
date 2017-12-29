<?php
/**
 * Created by PhpStorm.
 * User: jiangmingkai
 * Date: 2017/9/14
 * Time: 15:16
 */

namespace Auth\Controller;


use Think\Controller;

class CommonController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $username = session('username');
        if ($username == null || $username == '') {
            $this->redirect('login/index');
        }
    }
}