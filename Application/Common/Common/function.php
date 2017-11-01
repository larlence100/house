<?php

function getUserInfoById($user_id)
{
    $user = M('users');
    $userInfo = $user->where(['id'=>$user_id])->field('id,nickname,mobile,city,province,country,avatarUrl')->find();
    return $userInfo;
}
function getUserNameById($user_id)
{
    $user = M('users');
    $userInfo = $user->where(['id'=>$user_id])->field('id,nickname,mobile,city,province,country,avatarUrl')->find();
    return $userInfo['nickname']?$userInfo['nickname']:'';
}

function getAdminUserNameById($user_id)
{
    $user = M('yonghu');
    $userInfo = $user->where(['id'=>$user_id])->find();
    return $userInfo['ygmingcheng']?$userInfo['ygmingcheng']:'';
}



function getUserInfoByAppid($appid)
{
    $user = M('users');
    $userInfo = $user->where(['appid'=>$appid])->field('id,nickname,mobile,city,province,country,avatarUrl')->find();
    return $userInfo;
}



function getUserBySessionId($session_id)
{
    $session = M('session');
    $data =  $session->where(['session_id'=>$session_id])->find();
    if (!$data) {
        throw new \Think\Exception('error session_id');
    }
    return $data;
}
/**
 * 获取房屋详情
 * @param $id
 * @return mixed
 * @throws Exception
 */
function getHouseInfoById($id){
    $house = M('fangyuan');
    $data =  $house->field('yezhudianhua,yezhu',true)->find($id);
    if (!$data) {
        throw new \Think\Exception('未找到该房源信息');
    }
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
        $data[$key] = C('TWO_DIR')."/Upload/".$value['image'];
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

function getUserInfo($code,$encryptedData,$iv)
{
    import('Org.Weixin.errorCode');
    import('Org.Weixin.wxBizDataCrypt');
    $appid = 'wxd60a9da2a894158b';
    $secret = 'f63615e5126f553e1f35e80e48fb2411';
    $grant_type='authorization_code';
    $url='https://api.weixin.qq.com/sns/jscode2session';
    $url= sprintf("%s?appid=%s&secret=%s&js_code=%s&grant_type=%",$url,$appid,$secret,$code,$grant_type);
    $user_data=json_decode(file_get_contents($url));
    $session_key= define_str_replace($user_data->session_key);
    \Think\Log::write('session_key---'.$session_key,'WARN');

    /*$session_key = 'Cd2QaJ50efe2C9+QV+4dcQ==';
    $encryptedData="ks8BuECph8DMwB/+M6L9wyqHzsOvGYnlVz+VzxNIcT+Yb2Ye23nHlXkbx+CUjeqVn3UXmQScZHowByHmSstTxMbFZxRlJacy/yqBlPVTojYcoXGRiw3ZxzMVLCyHKPMLEDCRd0lX06fwRayz2tAUwuMCYqXcwD1yyRWzKPE4DAlqEYf/EZ8W6/NyYLO/WQadMb00Y0PLykBVYW0tOk/NSRPrjZLWZi34c1DcH4SR1TE6g47F4SNpe5VWzIvo7HZVTwLRZAhRrG10e3gXIwwWWj5hFE+yY5njJW4rItIUrNZDo+BXRCVa0A977LYtqzFUY4Ssh7z1yzWpvYYv7nRXnyFLCjk3BnRUsxZOvt7AfOmQXpNfN6SoWk6kaB0m+kTxuyGROd0KEXS4vZIszoz2zwxopVS3bek/Peo0TxJIgF+jo6JYlw53qqO9vj4VQEF8SONKPC3Rkjb9Rc+TYtnusQ==";

    $iv = 'ZWt9VpuCvHPDx5e9rs45Mg==';*/


    $data="";
    $wxBizDataCrypt = new \WXBizDataCrypt($appid,$session_key);
    $errCode=$wxBizDataCrypt->decryptData(define_str_replace($encryptedData),$iv,$data);
    return ['errCode'=>$errCode,'data'=>json_decode($data),'session_key'=>$session_key];
}

/**
 * 请求过程中因为编码原因+号变成了空格
 * 需要用下面的方法转换回来
 */
function define_str_replace($data)
{
    return str_replace(' ','+',$data);
}

/**
 * 上传文件类型控制 此方法仅限ajax上传使用
 * @param string $path
 * @param string $format
 * @param string $maxSize
 * @return array
 * author Fox
 */
function ajaxUpload($format='image',$maxSize='52428800'){

    ini_set('max_execution_time', '0');
    $ext_arr= array(
        'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
        'photo' => array('jpg', 'jpeg', 'png')
    );

    if(!empty($_FILES)){
        // 上传文件配置
        $config=array(
            'maxSize'   =>  $maxSize,               // 上传文件最大为50M
            'rootPath'  =>  './Upload/',                   // 文件上传保存的根路径
            'savePath'  =>  '',         // 文件上传的保存路径（相对于根路径）
            'saveName'  =>  array('uniqid',''),     // 上传文件的保存规则，支持数组和字符串方式定义
            'autoSub'   =>  true,                  // 自动使用子目录保存上传文件 默认为true
            'exts'      =>  isset($ext_arr[$format])?$ext_arr[$format]:'',

        );

        // 实例化上传
        $upload=new \Think\Upload($config);
        // 调用上传方法
        $info=$upload->upload();

        $data=array();
        if(!$info){
            // 返回错误信息
            $error=$upload->getError();
            $data['error_info']=$error;
            return $data;
        }else{
            // 返回成功信息
            foreach($info as $file){
                $data['filePath']=trim('/Upload/'.$file['savepath'].$file['savename'],'.');
                return $data;
            }
        }
    }
}

/**
 * 获取订单号
 * @param $order_no
 * @return mixed
 * @throws \Think\Exception
 */
function getOrderByOrderNo($order_no){
    $house = M('order');
    $data =  $house->where(['order_no'=>$order_no])->find();
    if (!$data) {
        throw new \Think\Exception('未找到该订单信息');
    }
    return $data;
}

/**
 * 创建订单
 * @param $fangyuan_id
 * @param $user_id
 * @return bool
 * author Fox
 * @throws Exception
 */
function buildOrderNo($fangyuan_id,$user_id)
{

    $order      = M('order');
    $where = [
        'fangyuan_id' => $fangyuan_id,
        'user_id' => $user_id
    ];
    $orderObj = $order->where($where)->find();
    if(!empty($orderObj)){
        //throw new Exception('订单已经生成，请勿重复下单!');
        return $orderObj;
    }else{
        $order_no  = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        $addData = [
            'fangyuan_id'=>$fangyuan_id,
            'user_id'   =>$user_id,
            'order_no'  =>  $order_no,
            'order_money'=> C('PAY_MONEY'),
            'order_status'=>\Api\Controller\OrderController::IS_NO_PAY_STATUS,
            'order_time'=>time()
        ];
        if (!$order->add($addData)){
            throw new Exception('订单生成失败!');
        }else{
            $id = $order->getLastInsID();
            $orderObj = $order->find($id);
            return $orderObj;
        }
    }

}

function getUserNickNameByid($id)
{
    $user = M('users');
    $result = $user->where(['id'=>$id])->getField('nickname');
    return $result;
}

function getFyTitleById($id)
{
    $fangyuan = M('fangyuan');
    $result = $fangyuan->where(['id'=>$id])->getField('fybiaoti');
    return $result;
}

function getXzqName($xzqId)
{
    $model = M('provinces');
    $result = $model->where(['provinceid'=>$xzqId])->getField('province');
    return $result;
}

function getCityName($cityId)
{
    $model = M('cities');
    $result = $model->where(['cityid'=>$cityId])->getField('city');
    return $result;
}

function getAreaName($areaId)
{
    $model = M('areas');
    $result = $model->where(['areaid'=>$areaId])->getField('area');
    return $result;
}

function getAreaByCityId($cityId)
{
    $model = M('areas');
    $result = $model->where(['cityid'=>$cityId])->select();
    return $result;
}

function getFangYuanById($fangyuan_id)
{
    $model = M('fangyuan');
    $result = $model->where(['id'=>$fangyuan_id,'status'=>1])->find();
    if (!$result) {
        throw new \Think\Exception('未找到该房源信息');
    }
    return $result;
}

function checkUserFangyuanCollect($fangyuan_id,$user_id)
{
    $model = M('shoucang');
    $result = $model->where(['user_id'=>$user_id,'fyid'=>$fangyuan_id])->find();
    return $result;
}

function node_regroup($node, $pid = 0, $access = null) {
    $arr = array();
    foreach($node as $v) {
        if(is_array($access)) {
            $v['access'] = in_array($v['id'], $access) ?  1 : 0;//判断是否已经拥有权限
        }
        if($v['pid'] == $pid) {
            $v['child'] = node_regroup($node, $v['id'], $access);
            $arr[] = $v;
        }
    }
    return $arr;
}

function isPayed($fangyuan_id,$user_id){
    $model = M('order');
    $result = $model->where(['user_id'=>$user_id,'fangyuan_id'=>$fangyuan_id,'order_status'=>\Api\Controller\OrderController::IS_PAY_STATUS])->find();
    return $result;
}



