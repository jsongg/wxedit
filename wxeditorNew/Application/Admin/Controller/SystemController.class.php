<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends BaseController {

    public function show(){
        $this->display();
    }

    public function modifyPassword(){
        $aid = $_SESSION['adminid'];
        $apassword = I('newpass');
        $apassword2 = I('newpass2');
        if($apassword == $apassword2){
            $admin = D('admin');
            $admin->apassword = md5($apassword);
            $res = $admin->where("aid=$aid")->save();
            if($res){
                $this->success('修改密码成功');
            }else{
                $this->error('修改密码失败');
            }
        }else{
            $this->error('两次密码不一致');

        }
    }
    
    public function loginOut(){
        session(null);
        header("location:".U('Login/show'));
    }

}