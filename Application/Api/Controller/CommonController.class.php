<?php
/**
 * User: liujianjiang
 */

namespace Api\Controller;


class CommonController extends ApiController
{
    public function param()
    {
        $peizhi = M('peizhi');
        $result = $peizhi->select();
        $data = groupByArray($result,'pzming');
        $this->returnApiSuccessWithData($data);
    }

    public function house_field()
    {
        $fyzidua = M('fyziduan');
        $this->returnApiSuccessWithData($fyzidua->select());
    }

    public function getHouseEstate()
    {
        $txt=I('txt');
        $listObj = M('xiaoqu');

        $where['_string']='(xiaoqum like "%'.$txt.'%")  OR (pinyinjs like "%'.$txt.'%")';
        $where['gongsiid'] = session('gongsiid');
        $list = $listObj->where($where)->limit(10)->select();
        $data=array('status'=>0,'district'=>$list);
        header("Content-type: application/json");
        exit(json_encode($data));
    }


    public function ajax_upload(){
        // 根据自己的业务调整上传路径、允许的格式、文件大小
        //$path = "/upload/".date('Y').'/'.date('m').'/'.date('d');
        ajaxUpload();
    }

    public function get_area_list($cityId)
    {
        return getAreaByCityId($cityId);
    }

}