<?php

/**
 * 获取房屋详情
 * @param $id
 * @return mixed
 * author Fox
 */
function getHouseInfoById($id){
    $house = M('fangyuan');
    $data =  $house->find($id);
    return $data;
}

/**
 * 数组分组
 * @param $result
 * @param $key
 * @return mixed
 * author Fox
 */
function groupByArray($result,$key)
{
    foreach ($result as $k=>$v){
        $data[$v[$key]][] = $v;
    }
    return $data;
}

/**
 * 获取房源图片
 * @param $bianhao
 * @return mixed
 * author Fox
 */
function getHousePhoto($bianhao)
{
    $photo = M('photo');
    $result = $photo->where(['fybh'=>$bianhao])->field('image')->select();
    $data = [];
    foreach($result as $key=>$value){
        $data[$key] = "/Upload/".$bianhao.'/t_'.$value['image'];
    }
    return $data;
}

/**
 * 获取小区详细信息
 * @param $xiaoqu_id
 * @return mixed
 * author Fox
 */
function getXiaoQuInfo($xiaoqu_id)
{
    $xiaoqu = M('xiaoqu');
    $result = $xiaoqu->where(['id'=>$xiaoqu_id])->find();
    return $result;
}




