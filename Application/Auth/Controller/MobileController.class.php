<?php
/**
 * Created by PhpStorm.
 * User: jiangmingkai
 * Date: 2017/11/18
 * Time: 9:57
 */

namespace Auth\Controller;
use Think\Page;
use Think\Controller;
class MobileController extends Controller
{
    public function index()
    {
        $Data = M('travel');
        import('ORG.Util.Page');// 导入分页类
        $count = $Data->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
//         进行分页数据查询
        $list = $Data->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
        $this->assign('travel', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->assign('count', $count);
        $this->display();
    }

    public function type(){
        $id=$_POST['id'];
        $type=$_POST['type'];
        $save=M('travel')->where('id ='.$id)->data(array('type'=>$type))->save();
        if($save){
            $this->ajaxReturn($type,'json');
        }
    }


    public function news(){
        $id=$_POST['id'];
        $new=$_POST['news'];
        $save=M('travel')->where('id ='.$id)->data(array('new'=>$new))->save();
        if($save){
            $this->ajaxReturn($new,'json');
        }
    }

    public function show(){
        $id=$_POST['id'];
        $show=$_POST['is_show'];
        $save=M('travel')->where('id ='.$id)->data(array('is_show'=>$show))->save();
        if($save){
            $this->ajaxReturn($id,'json');
        }
    }

    public function delete(){
        $id=$_POST['id'];
        $save=M('travel')->where('id ='.$id)->delete();
        if($save){
            $this->ajaxReturn($save,'json');
        }
    }

    public function edit(){
        $id=$_GET['id'];
        $travel=M('travel')->where('id ='.$id)->find();
        $this->assign('travel',$travel);
        $this->display();
    }

    public function save(){
        $id=$_POST['id'];
        $data['type']= $_POST['type'];
        $data['stop_time']= $_POST['stop_time'];
        $data['create_time']= date('Y-m-d H:i:s',time());
        $data['title']= $_POST['title'];
        $data['url']= $_POST['url'];
        $data['is_show']= $_POST['show'];
        if(isset($_POST['id']) && $_POST['id'] !=''){
            $save=M('travel')->where('id ='.$id)->data($data)->save();
            if($save){
                $this->ajaxReturn($save,'json');
            }
        }else{
            $save=M('travel')->data($data)->add();
            if($save){
                $this->ajaxReturn($save,'json');
            }
        }
    }

    public function add(){

        $this->display();
    }
}