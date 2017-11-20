<?php

    namespace Home\Controller;
    use Think\Controller;
    use Think\Model;
    class ConfigController extends CommonController {

        public function config(){
            $model = M('config');
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


        public function getBanners(){
            $model = M('config');
            if(IS_POST){
                $bannerPath = uploadPhotos();
                foreach($bannerPath as $k=>$v) {
                    $map['name'] = $k;
                    $model->value = $v['filePath'];
                    $model->where($map)->save();
                }
                $this->success('更新成功！');
            }else{
                $list = $model->where("name = 'banner_one' or name = 'banner_two' or name = 'banner_three'")->field('value')->select();
                $this->assign('list',$list);
                $this->display();
            }

        }

    }
?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        