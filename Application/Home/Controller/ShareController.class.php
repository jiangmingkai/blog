<?php
namespace Home\Controller;

use Think\Controller;

class ShareController extends CommonController
{
    public function index()
    {

        return $this->display('Index/share');
    }
}