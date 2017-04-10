<?php
namespace Admin\Controller;
use Think\Controller;
class FocusController extends BaseController {
	/**
	 * 关注引导
	 */
    public function show($type){

        $info = D('style');

        $total = $info->where("stype=$type")->count();
        
        $Page = new \Think\Page($total,15);//  实例化分页类 传入总记录数和每页显示的
        $show = $Page->show();//  分页显示输出


        $info = $info->field('sid,stype,sstyle,scode')->where("stype=$type")->limit($Page->firstRow.',
'.$Page->listRows)->select();
        // p($info);die;
        $i = 1;
        $this->assign('i',$i);
        $this->assign('info',$info);
        $this->assign('page',$show);
        $this->display();
    }

    public function editstyle($id,$type){
        $info = D('style');
        $msg = $info->where("sid=$id and stype=$type")->find();
        // echo $type;
        // p($msg);die;
        $this->assign('msg',$msg);
        // $this->assign('type',$type);
        $this->display();
    }

    public function save($sid){
        $stype = I('typestr');
        $sstyle = I('stylestr');
        $id = I('id');
        $scode = $_POST['content'];
        // echo $scode;die;
        $style = D('style');
        // $style->scode = $id;
        $style->stype = $stype;
        $style->sstyle = $sstyle;
        $style->scode = $scode;

        $res = $style->where("sid=$sid")->save();
        if($res){
            $this->success('修改样式成功!');
        }else{
            $this->error('修改样式失败!');
        }
    }

    public function del($id){
        $res = D('style')->delete($id);
        if($res){
            $this->success('删除导样式成功！');
        }else{
            $this->error('删除样式失败！');
        }
    }

    public function addstyle(){
        

        $type = I('type');
        $this->assign('stype',$type);
        $this->display();
    }

    public function create(){
        $stype = I('typestr');
        $sstyle = I('stylestr');
        $id = I('id');
        $scode = $_POST['content'];
        $addtime = date('Y-m-d H:i:s',time());

        $style = D('style');
        $style->stype = $stype;
        $style->sstyle = $sstyle;
        $style->sid = $id;
        $style->scode = $scode;
        $style->addtime = $addtime;
        $res = $style->add();
        if($res){
            $this->success('添加样式成功');
        }else{
            $this->error('添加样式失败');
        }
    }
}