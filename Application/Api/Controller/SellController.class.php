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

            $data['status'] = 1;
            $data['leixing'] = I('leixing');//类型
            $data['yongtu'] =I('yongtu')?I('yongtu'):1;//用途
            $data['xiaoqu'] = I('xiaoqu');
            $data['cqxingzhi'] = 1;
            $data['yangtai'] = I('yangtai')?I('yangtai'):0;
            if($data['xiaoqu']){
                $xiaoqu = getXiaoQuInfo($data['xiaoqu']);
                if(!$xiaoqu){
                    throw new Exception(1,'未找到该小区');
                }
                $data['xiaoqum'] = $xiaoqu['xiaoqum'];
                $data['pianqu'] = $xiaoqu['sspianqu'];
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
            }


            $data['chaoxiang']=I('chaoxiang');
            $data['zhuangxiu']=I('zhuangxiu');
            $data['fwleixing']=I('fwleixing');
            $data['laiyuan']=I('laiyuan');
            $data['zuodong']=I('zuodong');
            $data['danyuan']=I('danyuan');
            $data['fanghao']=I('fanghao');
            $data['yezhu']=I('yezhu');

            $data['fybiaoti']=I('fybiaoti');
            $data['shi']=I('shi');
            $data['ting']=I('ting');
            $data['wei']=I('wei');
            $data['chu']=I('chu');
            $data['louceng']=I('louceng');
            $data['zlouceng']=I('zlouceng');
            $data['niandai']=I('niandai');
            $data['lurusj']=time();
            
            //房源图片
            $photos = I('photo');
            if ($photos){
                $photosArr = implode('',$photos);
                $photoModel = M('photo');
                foreach ($photosArr as $photo){
                    $photoModel->add(['image'=>$photo,'create_time'=>time()]);
                }
            }

            $result = M('Fangyuan')->add($data);
            if (!$result) {
                throw new Exception('添加失败');
            }

            $this->returnApiSuccessWithMsg('添加成功');
        }catch (Exception $e)
        {
            $this->returnApiErrorWithMsg($e->getMessage());
        }
    }
}