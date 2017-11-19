<?php
/**
 * User: liujianjiang
 */

namespace Api\Controller;


use Think\Exception;

class SellController extends ApiController
{
    public function house_add()
    {

        try{
            $data = I();
            $data['bianhao']= rand(10000,99999);

            $data['yezhudianhua']=I('yezhudianhua');
            $data['verify'] = I('verify');

            foreach($data as $key=>$value)
            {
                if($value == ''){
                    throw new Exception($key.' not allow null');
                }
            }

           /* $checkCode = getVerifyCode($data['yezhudianhua'],$data['verify']);
            if(!$checkCode){
                throw new Exception('验证码不正确');
            }else{
                updateVerifyCode($checkCode['id']);
            }*/

            $data['leixing'] = I('leixing');//类型
            $data['yongtu'] =I('yongtu')?I('yongtu'):1;//用途
            $data['xiaoqu'] = I('xiaoqu');
            $data['cqxingzhi'] = 1;


            if($data['xiaoqu']){
                $xiaoqu = getXiaoQuInfo($data['xiaoqu']);
                if(!$xiaoqu){
                    throw new Exception(1,'未找到该小区');
                }
                $data['xiaoqum'] = $xiaoqu['xiaoqum'];
                $data['pianqu'] = $xiaoqu['sspianqu'];
                $data['xingzhengqu'] = $xiaoqu['ssxzq'];
                $data['ssxzq'] = $xiaoqu['ssxzq'];
                $data['ssarea'] = $xiaoqu['ssarea'];
            }

            //出售类型
            if ($data['leixing'] == 1){
                $data['mianji']=I('mianji');
                $data['shoujia']=I('shoujia');
                if(I('mianji')!="" and I('shoujia')!=""){
                    $num1=I('shoujia')*10000;
                    $num2=I('mianji');
                    $num=$num1/$num2;
                    $danjia=number_format($num,2,".", "");
                    $data['danjia']=$danjia;
                }
            }

            //出租类型
            if ($data['leixing'] == 2){
                $data['zujia'] = I('shoujia');
                $data['zujialx'] = I('zujialx');
            }

            $data['chaoxiang']=I('chaoxiang');
            $data['zhuangxiu']=I('zhuangxiu');
            $data['fwleixing']=I('fwleixing');
            $data['zuodong']=I('zuodong');
            $data['danyuan']=I('danyuan');
            $data['fanghao']=I('fanghao');
            $data['fybiaoti']=I('fybiaoti');
            $data['shi']=I('shi');
            $data['ting']=I('ting');
            $data['wei']=I('wei');
            $data['chu']=I('chu',0);
            $data['yangtai'] = I('yangtai',0);
            $data['louceng']=I('louceng');
            $data['zlouceng']=I('zlouceng');
            $data['tupian']=1;
            $data['laiyuan']=1;
            $data['yezhu_idcard']=I('yezhu_idcard');
            $data['lurusj']=time();
            $data['weihurenid']=$this->user->id;

            //判断提交的图片不小于1张
            $photos = I('photo');
            if ($photos){
                $photosArr = explode(',',$photos);
                if(count($photosArr)<1){
                    throw new Exception('房源图片低于一张');
                }
            }

            //判断提交的产权图片不小于1张
            $cq_photos = I('cq_photo');
            if ($cq_photos){
                $cq_photosArr = explode(',',$cq_photos);
                if(count($cq_photosArr)<1){
                    throw new Exception('产权图片低于一张');
                }
            }

            //房源信息存数据库
            $result = M('Fangyuan')->add($data);
            if (!$result) {
                throw new Exception('添加失败');
            }

            //更新图片到房源图片表
            $photoModel = M('photo');
            foreach ($photosArr as $photo){
                $photoModel->add(['image'=>$photo,'fybh'=>$data['bianhao'],'create_time'=>time()]);
            }

            //更新产权图片到产权图片表
            $cq_photoModel = M('cq_photo');
            foreach ($cq_photosArr as $photo){
                $cq_photoModel->add(['image'=>$photo,'fybh'=>$data['bianhao'],'create_time'=>time()]);
            }

            $this->returnApiSuccessWithMsg('添加成功');
        }catch (Exception $e)
        {
            $this->returnApiErrorWithMsg($e->getMessage());
        }
    }
}