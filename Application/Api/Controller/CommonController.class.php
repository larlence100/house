<?php
/**
 * User: liujianjiang
 */

namespace Api\Controller;


use Home\Controller\FysousuoController;

class CommonController extends ApiController
{
    public function param()
    {
        $peizhi = M('peizhi');
        $this->returnApiSuccessWithData($peizhi->select());
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
}