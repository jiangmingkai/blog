<?php
namespace Home\Controller;
use Think\Page;
use Think\Controller;

class LearnController extends CommonController
{
    public function index()
    {
        $type=M('new_type')->where(['new_type_id'=>1])->select();
        if($_GET['type']){
            $where['new_type']=$_GET['type'];
        }else{
            $where['new_type']=2;
        }
        $Data = M('new');
        import('ORG.Util.Page');// 导入分页类
        $count = $Data->where($where)->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,5);// 实例化分页类 传入总记录数
        $show = $Page->pages();// 分页显示输出
//         进行分页数据查询
        $list = $Data->order('new_create_time desc')->where($where)->limit($Page->firstRow . ',' . $Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
        $this->assign('new', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->assign('count', $count);
        $this->assign('type',$type);
        $this->display('Index/learn');
    }
}