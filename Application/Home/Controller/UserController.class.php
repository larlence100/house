<?php

    /*************************************************************************\
    |                                                                         |
    | 开单大师（专业的房产ERP管理系统）                                       |
    |                                                                         |
    | Copyright (c) 2008-2017 http://www.kaidandashi.com All rights reserved. |
    |                                                                         |
    | 本系统由淮南市银泰科技软件有限公司提供技术支持                          |
    |                                                                         |
    | QQ号：984784483                                                         |
    |                                                                         |
    \*************************************************************************/

    namespace Home\Controller;
    use Think\Controller;
    use Think\Model;
    class UserController extends CommonController {
        //部门列表
        public function user(){
            $Data=M('users');
            $count=$Data->where($map)->count();
            $Page=new \Think\Page($count,30);
            $show=$Page->show();
            $user=$Data->where($map)->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('user',$user);
            $this->assign('count',$count);
            $this->assign('page',$show);
            $this->display();
        }


        public function stopUser(){
            $id=I('id');
            if(M('users')->where(array('id'=>$id))->setField('status',1)){
                $this->success('成功');
            }else{
                $this->error('失败');
            }
        }
        public function startUser(){
            $id=I('id');
            if(M('users')->where(array('id'=>$id))->setField('status',0)){
                $this->success('成功');
            }else{
                $this->error('失败');
            }
        }




    }
?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        