<?php

    namespace Home\Controller;
    use Think\Controller;
    use Think\Model;
    class ConfigController extends CommonController {
        //部门列表
        public function config(){
            $model = M('config');

            //$money = getConfigValue('pay_money');
            //var_dump(intval($money));exit;
            if(IS_POST){
                $data = I();
                foreach($data as $k=>$v) {
                    $map['name'] = $k;
                    $model->value = $v;
                    $model->where($map)->save();
                }
                $this->success('更新成功！');
            }else{

                $list = $model->select();
                $config = groupByArray($list,'name');
                $this->assign('config',$config);
                $this->display();
            }

        }
    }
?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        