<?php
namespace Home\Controller;

use Think\Controller;

class AboutController extends CommonController
{
    public function index()
    {

        return $this->display('Index/about');
    }
}