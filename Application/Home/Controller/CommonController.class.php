<?php
/**
 * Created by PhpStorm.
 * User: jiangmingkai
 * Date: 2017/12/6
 * Time: 16:53
 */
namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller
{
    public function _initialize()
    {
        $config=M('config')->where(array('id'=>1))->find();
        define('CONFIG_URL', $config['config_url']);
        define('CONFIG_TITLE', $config['config_title']);
        define('CONFIG_ABS', $config['config_abs']);
        define('CONFIG_KEY', $config['config_key']);
        define('CONFIG_NUM', $config['config_num']);
        define('CONFIG_CAL', $config['config_cal']);
    }
}