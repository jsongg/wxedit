<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function show(){

        $this->display();
    }

    public function check(){
    	$aname = I('adminname');
    	$apassword = I('adminpassword');
    	$admin = D('admin')->select();
    	// echo $aname."<br>";
    	// echo md5($apassword)."<br>";
    	// p($admin[0]['aname'])."<br>";
    	// p($admin[0]['apassword']);die;

    	if($aname==$admin[0]['aname'] && md5($apassword)==$admin[0]['apassword']){
    		$_SESSION['adminid'] = $admin[0]['aid'];
    		$_SESSION['adminname'] = $admin[0]['aname'];
    		// header("Location:U('Login/show')");
    		header("location:".U('Index/index'));
    	}else{
    		header("Location:".U('Login/show'));
    	}
    }

    
}