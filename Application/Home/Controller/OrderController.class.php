<?php

    namespace Home\Controller;
    use Think\Controller;
    use Think\Model;
    class OrderController extends CommonController {
        //部门列表
        public function order(){

            $Data=M('order');
            $startTime = I('startTime')?I('startTime'):'';
            $order_status = I('order_status',3);
            $endTime = I('endTime')?I('endTime'):date('Y-m-d',time());
            $map['order_time'] = array('between',[strtotime($startTime),strtotime($endTime)]);
            if($order_status !=3) {
                $map['order_status'] = $order_status;
            }
            $count=$Data->where($map)->count();
            $Page=new \Think\Page($count,30);
            $show=$Page->show();
            $list=$Data->where($map)->order('order_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('list',$list);
            $this->assign('count',$count);
            $this->assign('page',$show);
            $this->assign('order_status',$order_status);
            $this->assign('startTime',$startTime);
            $this->assign('endTime',$endTime);
            $this->display();
        }
    }
?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        