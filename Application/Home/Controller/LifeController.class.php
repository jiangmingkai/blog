<?php
namespace Home\Controller;

use Think\Controller;

class LifeController extends CommonController
{
    public function index()
    {

        return $this->display('Index/life');
    }
}