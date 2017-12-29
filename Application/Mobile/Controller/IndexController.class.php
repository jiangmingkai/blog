<?php
/**
 * Created by PhpStorm.
 * User: jiangmingkai
 * Date: 2017/11/10
 * Time: 9:44
 */
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        $new=M('new')->where('new_show = 1')->order('new_create_time desc')->limit(5)->select();
        $this->assign('new',$new);
        $this->display();
    }

    public function blog(){
        $type=M('new_type')->where(['new_type_id'=>1])->select();
        $new_type=0;
        if(isset($_GET['type'])){
            $where['new_type']=$_GET['type'];
            $new_type=$_GET['type'];
        }
        $where['new_show']=1;
        $info=M('new')->where($where)->order('new_create_time desc')->limit(5)->select();
        $this->assign('type',$type);
        $this->assign('new_type',$new_type);
        $this->assign('info',$info);
        $this->display();
    }

    public function blog_load(){
        $start=$_POST['page']*5;
        if($_POST['type']){
            $where['new_type']=$_POST['type'];
        }
        $where['new_show']=1;
        $info='';
        if($start){
            $info['lists']=M('new')->where($where)->order('new_create_time desc')->limit($start,5)->select();
            $this->ajaxReturn ($info,'JSON');
        }
    }
    public function blog_info(){
        $new=M('new')->where(array('new_show'=>1,'new_id'=>$_GET['id']))->find();
        $this->assign('new',$new);
        $this->display();
    }
    public function travel(){
        $ofo=M('travel')->where(array('is_show'=> 0,'type'=>1))->order('create_time desc')->limit(4)->select();
        $this->assign('ofo',$ofo);
        $mobike=M('travel')->where(array('is_show'=> 0,'type'=>2))->order('create_time desc')->limit(4)->select();
        $this->assign('mobike',$mobike);
        $didi=M('travel')->where(array('is_show'=> 0,'type'=>3))->order('create_time desc')->limit(4)->select();
        $this->assign('didi',$didi);
        $this->display();
    }

    public function info(){
        $id=$_GET['id'];
        if($id){
//            $info=M('travel')->where('type = '.$id)->where('is_show = 0')->order('id desc')->select();
//            $this->assign('info',$info);
            $this->assign('id',$id);
            $this->display();
        }
    }
    //加载数据
    public function load(){
        $id=$_POST['id'];
        $start=$_POST['pageEnd'];
        $counter=$_POST['counter'];
        $info='';
        if($id){
            $info['lists']=M('travel')->where(array('is_show'=> 0,'type'=>$id))->order('create_time desc')->select();
//            $info['lists']=M('travel')->where('type = '.$id)->order('id desc')->limit($start,15)->select();
//            $info['lists']=M('travel')->where('type = '.$id)->order('id desc')->limit(6)->select();
            $info['count']=M('travel')->where(array('is_show'=> 0,'type'=>$id))->order('create_time desc')->count();
//            $info['count']=0;
//            $last=$start+5;
//                if($count <=$last){
//                    $info['count']=1;
//                }
//            $info['lists']='';
            $this->ajaxReturn ($info,'JSON');
        }
    }
    /*
     * 评论
     */
    public function message(){
        $this->display();
    }
}