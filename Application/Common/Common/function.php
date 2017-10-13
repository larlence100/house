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
    return $result;
}




