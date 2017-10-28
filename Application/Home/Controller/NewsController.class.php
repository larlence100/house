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
    class NewsController extends CommonController {
        //部门列表
        public function news(){
            $Data=M('news');
            $count=$Data->where($map)->count();
            $Page=new \Think\Page($count,30);
            $show=$Page->show();
            $list=$Data->where($map)->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('list',$list);
            $this->assign('count',$count);
            $this->assign('page',$show);
            $this->display();
        }

        public function add()
        {
           if(IS_POST){
                $data = [
                    'title'=>I('title')?I('title'):'',
                    'desc'=>I('desc')?I('desc'):'',
                    'contents'=>I('contents')?I('contents'):'',
                    'new_status'=>I('new_status') == on ? 1:0,
                    'creater_id' =>  session('uid'),
                    'created_at' =>  time()
                ];
               $news = M('news');
               if (!$news->add($data)){
                   $this->error('添加失败!');
               }else{
                    $this->success('添加成功！');
               }
           }else{
               $this->display();
           }
        }

        public function edit()
        {
            $id = I('id');
            $news = M('news');
            $detail = $news->where(['id'=>$id])->find();
            if(IS_POST){
                $data = [
                    'title'=>I('title')?I('title'):'',
                    'desc'=>I('desc')?I('desc'):'',
                    'contents'=>I('contents',''),
                    'new_status'=>I('new_status',0),
                    'creater_id' =>  session('uid'),
                    'updated_at' =>  time()
                ];
                if (!$news->where(['id'=>$id])->save($data)){
                    var_dump($news->getLastSql());exit;
                    $this->error('修改失败!');
                }else{
                    $this->success('修改成功！');
                }
            }else{
                $this->assign('detail',$detail);
                $this->display();
            }
        }
    }
?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        