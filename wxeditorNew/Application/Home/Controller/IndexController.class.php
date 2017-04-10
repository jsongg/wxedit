<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// $stype = I('stype');
    	$stype1 = D('style')->where("stype=1")->select();
    	$stype2 = D('style')->where("stype=2")->select();
    	$stype3 = D('style')->where("stype=3")->select();
    	$stype4 = D('style')->where("stype=4")->select();
    	$stype5 = D('style')->where("stype=5")->select();
    	$stype6 = D('style')->where("stype=6")->select();
    	$stype7 = D('style')->where("stype=7")->select();
    	$count1 = count($stype1);
    	$count2 = count($stype2);
    	$count3 = count($stype3);
    	$count4 = count($stype4);
    	$count5 = count($stype5);
    	$count6 = count($stype6);
    	$count7 = count($stype7);
    	// echo $count1;die;
    	// p($stype1);die;
    	// $total = count($style);
    	// $total = D('style')->count();
    	// var_dump($total);die;
    	// p($style);die;
    	// $this->assign('total',$total);
    	$this->assign('count1',$count1);
    	$this->assign('count2',$count2);
    	$this->assign('count3',$count3);
    	$this->assign('count4',$count4);
    	$this->assign('count5',$count5);
    	$this->assign('count6',$count6);
    	$this->assign('count7',$count7);

    	$this->assign('stype1',$stype1);
    	$this->assign('stype2',$stype2);
    	$this->assign('stype3',$stype3);
    	$this->assign('stype4',$stype4);
    	$this->assign('stype5',$stype5);
    	$this->assign('stype6',$stype6);
    	$this->assign('stype7',$stype7);
        $this->display();
    }
}