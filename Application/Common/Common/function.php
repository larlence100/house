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

/**
 * 短信发送存表
 * @param $moible
 * @param $code
 * @return mixed
 * author Fox
 */
function smsLog($moible,$code)
{
    $sms = M('sms');
    $data = [
        'code' => $code,
        'mobile'=> $moible,
        'created_at' => time()
    ];
    //var_dump($data);exit;
    $result = $sms->add($data);
    return $result;
}

function getVerifyCode($mobile,$code)
{
    $sms = M('sms');
    $result = $sms->where('mobile =' .$mobile.' and code =' .$code.' and used_at = 0')->order('created_at')->find();
    return $result;
}


function updateVerifyCode($id)
{
    $sms = M('sms');
    $result = $sms->where('id='.$id)->save(['used_at'=>time()]);
    return $result;
}



