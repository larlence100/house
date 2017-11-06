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
    class RbacController extends CommonController {
        //部门列表
        public function Bumen(){
            $map=array('gongsiid'=>session('gongsiid'));
            $Data=M('bumen');
            $count=$Data->where($map)->count();
            $Page=new \Think\Page($count,30);
            $show=$Page->show();
            $Bumen=$Data->where($map)->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('bm',$Bumen);
            $this->assign('count',$count);
            $this->assign('page',$show);
            $this->display();
        }
        //角色列表
        public function Role(){
            $map=array('gongsiid'=>session('gongsiid'));
            $Data=M('role');
            $count=$Data->where($map)->count();
            $Page=new \Think\Page($count,30);
            $show=$Page->show();
            $Role=$Data->where($map)->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('role',$Role);
            $this->assign('count',$count);
            $this->assign('page',$show);
            $this->display();
        }
    	//用户列表
        public function index(){
            $map['gongsiid']=session('gongsiid');
            $map['id']=array('neq',1);
            $count=D('UserRelation')->where($map)->count();
            $Page=new \Think\Page($count,30);
            $show=$Page->show();
            $Yonghu=D('UserRelation')->where($map)->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->field('mima',true)->relation('role')->select();
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('user',$Yonghu);
            $this->assign('count',$count);
            $this->assign('page',$show);
            $this->display();
        }

        public function stopUser(){
            $id=I('id');

            if(M('yonghu')->where(array('id'=>$id))->setField('lock',1)){
                $this->success('成功');
            }else{
                $this->error('失败');
            }
        }
        public function startUser(){
            $id=I('id');

            if(M('yonghu')->where(array('id'=>$id))->setField('lock',0)){
                $this->success('成功');
            }else{
                $this->error('失败');
            }
        }
        //添加用户
        public function addUser(){
            $this->bumen = M('bumen')->where(array('gongsiid' =>session('gongsiid')))->select();
            $this->role = M('role')->where(array('gongsiid' =>session('gongsiid')))->select();
            $this->display();
        }
        //添加用户表单处理
        public function addUserHandle(){
            //防止重复提交
            $yonghu=M('yonghu');
            if (!$yonghu->autoCheckToken($_POST)) {
                $this->error('请不要重复添加');
            }
            if (session('gongsiid')=="") {
                $this->error('请重新登录');
            }
            $user=M('yonghu')->where(array('dianhua' =>I('dianhua'),'gongsiid'=>session('gongsiid')))->find();
            if ($user) {
                 $this->error('手机号已被使用');
            }
            $user = array(
                'gongsiid'=>session('gongsiid'),
                'ygmingcheng'=>I('ygmingcheng'),
                'dianhua'=>I('dianhua'),
                'ygbianhao'=>I('ygbianhao'),
                'bumen'=>I('bumen'),
                'mima'=>I('mima','','md5'),
                'logintime'=>time(),
                'loginip'=>get_client_ip(),
                'xzchakan'=>I('xzchakan')
                );
            $role=array();
            if ($uid=M('yonghu')->add($user)) {
                foreach ($_POST['role_id'] as $v) {
                    $role[] =  array(
                        'role_id'=>$v,
                        'user_id'=>$uid
                        );
                }
                M('role_user')->addALL($role);
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //更新用户
        public function editUser(){
            $this->bumen = M('bumen')->where(array('gongsiid' =>session('gongsiid')))->select();

            $this->role= M('role')->where(array('gongsiid' =>session('gongsiid')))->select();
            $this->user=M('Yonghu')->where(array('id'=>I('id')))->find();
            $this->role_id=M('role_user')->where(array('id'=>I('id')))->find();
            $this->display();
        }
        //更新用户表单处理
        public function editUserHandle(){
            $User=M("Yonghu");
            $data['ygmingcheng']=I('ygmingcheng');
            $data['dianhua']=I('dianhua');
            $data['bumen']=I('bumen');
            $data['ygbianhao']=I('ygbianhao');
            if (I('mima')) {
                $data['mima']=md5(trim(I('mima')));
            }
            $data['xzchakan']=I('xzchakan');
            if(session('uid')==1){
                
                if (I('keyid')) {
                    $key=M('yonghu')->where('keyid="'.I('keyid').'"')->find();
                    if ($key) {
                        $this->error('key已存在');
                    }else{
                        $data['keyid']=I('keyid');
                    }
                }else{
                    $data['keyid']=I('keyid');
                }
                
            }
             $ues=$User->where(array('id'=>I('id')))->save($data);
            if ($ues){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        //删除用户
        public function delUser(){
            $id=I('id');
            $dp=M('Yonghu');
            $dp->where(array('id'=>$id))->delete();
            if ($dp){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
        //更新角色
        public function editRole(){
            $this->role=M('Role')->where(array('id'=>I('id')))->find();
            $this->display();
        }
        //更新角色表单处理
        public function editRoleHandle(){
            $Role=M("Role");
            $data['name']=I('name');
            $data['remark']=I('remark');
            $data['status']=I('status');
            $Role->where(array('id'=>I('id')))->save($data);
            if ($Role){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        //更新部门
        public function editBumen(){
            $id=I('id');
            $this->bm=M('bumen')->where(array('id'=>$id))->find();
            $this->yonghu=M('yonghu')->where(array('bumen'=>$id,'gongsiid'=>session('gongsiid')))->select();
            $this->display();
        }
        public function get_jsxsj(){
            $listObj = M('role');
            $list = $listObj->order('id desc')->find();
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        public function get_yhxsj(){
            $listObj = M('yonghu');
            $list = $listObj->order('id desc')->find();
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        public function get_bmxsj(){
            $listObj = M('bumen');
            $list = $listObj->order('id desc')->find();
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        public function get_jdxsj(){
            $listObj = M('node');
            $list = $listObj->order('id desc')->find();
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }

        public function editRoleNode()
        {

            $rid = I('get.rid', 0, 'int');//角色id
            $field = array('id', 'name', 'title', 'pid');
            $node = M('node')->field($field)->order('sort asc')->select();
            $access = M('access')->where('role_id = '.$rid)->getField('node_id', true);
            $node = node_regroup($node, 0, $access); //递归节点
            $this->node = $node;
            $this->assign('rid',$rid);
            $this->display();
        }

        //权限配置的表单提交处理
        public function access_handle() {
            $rid = I('rid', 0, 'int');
            $db = M('access');
            $db->where('role_id = '.$rid)->delete();//删除原有权限
            $data = array();
            if(!empty($_POST['access'])) {
                foreach($_POST['access'] as $v) {
                    $tmp = explode('_', $v);
                    $data[] = array(
                        'role_id'=>$rid,
                        'node_id'=>$tmp[0],
                        'level'=>$tmp[1]
                    );
                }
                if($db->addAll($data)) { //写入新权限
                    $this->success('更新成功');
                } else {
                    $this->error('分配权限失败');
                }
            }
        }
    }
?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        