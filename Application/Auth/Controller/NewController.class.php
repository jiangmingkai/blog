<?php
/**
 * Created by PhpStorm.
 * User: jiangmingkai
 * Date: 2017/9/14
 * Time: 16:15
 */

namespace Auth\Controller;

use Think\Page;

class NewController extends CommonController
{
    public function index()
    {
        $Data = M('new  as  a');
//        $list=$Data->select();
//        $Data = M('Data'); // 实例化Data数据对象  date 是你的表名
        import('ORG.Util.Page');// 导入分页类
        $count = $Data->join('tbl_new_type  as  b  on a.new_type = b.id')->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
//         进行分页数据查询
        $list = $Data->join('tbl_new_type  as  b  on a.new_type = b.id')->order('new_id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->assign('count', $count);
        return $this->display();
    }

    public function show()
    {
        $id = $_POST['id'];
        $data['new_show'] = $_POST['is_show'];
        $save = M('new')->where('new_id =' . $id)->save($data);
        if ($save) {
            $this->ajaxReturn($id);
        }
    }

    public function add()
    {
        $new = M('new_type');
        $type = $new->where('new_type_id = 0')->select();
        $list = array();
        foreach ($type as $key => $v) {
            $tag = $v['id'];
            $list[$tag] = $v;
            $t = $new->where('new_type_id =' . $v['id'])->select();
            $list[$tag][] = $t;
        }
        $this->assign('list', $list);
        return $this->display();
    }

    public function save()
    {
        if($_POST['id']){
            $where = "new_id = '".$_POST['id']."'";
            $input['new_type'] = $_POST['new_id'];
            $input['new_title'] = $_POST['new_title'];
            $input['new_auth'] = $_POST['new_auth'];
            $input['new_describe'] = $_POST['new_abs'];
            $input['new_show'] = $_POST['new_show'];
            $input['new_content'] = $_POST['new_content'];
            $input['new_key'] = $_POST['new_key'];
            $save=M('new')->where($where)->save($input);
        } else {
            $input['new_type'] = $_POST['new_id'];
            $input['new_title'] = $_POST['new_title'];
            $input['new_auth'] = $_POST['new_auth'];
            $input['new_describe'] = $_POST['new_abs'];
            $input['new_show'] = $_POST['new_show'];
            $input['new_content'] = $_POST['new_content'];
            $input['new_create_time'] = date("Y-m-d H:i:s",time());
            $input['new_key'] = $_POST['new_key'];
            $save=M('new')->add($input);
        }
        if($save){
//            $this->success('111');
            $this->ajaxReturn($save);
        }
    }

    public function edit()
    {
        $news = M('new_type');
        $type = $news->where('new_type_id = 0')->select();
        $list = array();
        foreach ($type as $key => $v) {
            $tag = $v['id'];
            $list[$tag] = $v;
            $t = $news->where('new_type_id =' . $v['id'])->select();
            $list[$tag][] = $t;
        }
        $id = $_GET['id'];
        $new = M('new')->where('new_id =' . $id)->find();
        $this->assign('list', $list);
        $this->assign('new', $new);
        return $this->display();
    }

    public function delete()
    {
        $new = M('new');
        $id = $_POST['id'];
        $delete=$new->where('new_id = ' . $id)->delete();
        if($delete){
             $this->ajaxReturn(1);
        }
    }
}