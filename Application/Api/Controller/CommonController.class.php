<?php
/**
 * User: liujianjiang
 */

namespace Api\Controller;


use Think\Exception;

class CommonController extends ApiController
{
    /**
     * 获取房屋参数
     */
    public function param()
    {
        $peizhi = M('peizhi');
        $result = $peizhi->select();
        $data = groupByArray($result,'pzming');
        $this->returnApiSuccessWithData($data);
    }

    /**
     * 获取房屋字段
     */
    public function house_field()
    {
        $fyzidua = M('fyziduan');
        $this->returnApiSuccessWithData($fyzidua->select());
    }

    public function get_banners()
    {
        $config = M('config');
        $result = $config->where("name = 'banner_one' or name = 'banner_two' or name = 'banner_three'")->field('value')->select();
        $this->returnApiSuccessWithData($result);
    }

    /**
     * 获取小区
     */
    public function get_xiaoqu()
    {
        $txt=I('xiaoqum');
        $listObj = M('xiaoqu');

        $where['_string']='(xiaoqum like "%'.$txt.'%")  OR (pinyinjs like "%'.$txt.'%")';
        $list = $listObj->where($where)->limit(10)->select();
        $data=array('status'=>0,'district'=>$list);
        $this->returnApiSuccessWithData($data);
    }

    /**
     * ajax图片上传
     */
    public function ajax_upload(){

        $fileData = ajaxUpload('photo');
        $this->returnApiSuccessWithData($fileData);
    }

    /**
     * 获取城市下面的区
     */
    public function get_area_list()
    {
        $cityId = I('cityid');
        $data = getAreaByCityId($cityId);
        $this->returnApiSuccessWithData($data);
    }

    public function eveluate()
    {
        try{
            $data = [
                'user_id'=>$this->user->id,
                'xiaoqum'=>I('xiaoqum',''),
                'mianji'=>I('mianji',0),
                'fwleixing'=>I('fwleixing',0),
                'chaoxiang'=>I('chaoxiang',0),
                'louceng'=>I('louceng',''),
                'mobile'=>I('mobile',''),
                'nianxian'=>I('nianxian',''),
                'content'=>I('content',''),
                'created_at' =>  time()
            ];
            foreach($data as $key=>$value) {
                if(empty($value)){
                    throw new Exception($key.' is not allow null');
                }
            }
            $news = M('gujia');
            if (!$news->add($data)){
               throw new Exception('提交失败');
            }
            $this->returnApiSuccessWithMsg();
        }catch (Exception $e){
            $this->returnApiErrorWithMsg($e->getMessage());
        }
    }


}