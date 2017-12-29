<?php
namespace Home\Controller;

use Think\Controller;

class BookController extends CommonController
{
    public function index()
    {

        return $this->display('Index/book');
    }
}