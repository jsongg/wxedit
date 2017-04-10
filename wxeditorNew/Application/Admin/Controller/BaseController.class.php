<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function __construct(){
        parent::__construct();
        if(!$_SESSION['adminid']){
            header("location:".U('Login/show'));
        }

    }

    
}