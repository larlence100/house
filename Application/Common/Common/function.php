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

function define_str_replace($data){
    return str_replace(' ','+',$data);
}

 function getUserInfo($code,$encryptedData,$iv){

    import('Org.Weixin.errorCode');
    import('Org.Weixin.wxBizDataCrypt');

    $appid= '';
    $secret= '';
    $grant_type='authorization_code';
    $url='https://api.weixin.qq.com/sns/jscode2session';
    $url= sprintf("%s?appid=%s&secret=%s&js_code=%s&grant_type=%",$url,$appid,$secret,$code,$grant_type);
    $user_data=json_decode(file_get_contents($url));
    $session_key= define_str_replace($user_data->session_key);
    $data="";
    $wxBizDataCrypt=new \WXBizDataCrypt($appid,$session_key);
    $errCode=$wxBizDataCrypt->decryptData($encryptedData,$iv,$data);
    return ['errCode'=>$errCode,'data'=>json_decode($data),'session_key'=>$session_key];
}

/**
 * 上传文件类型控制 此方法仅限ajax上传使用
 * @param  string   $path    字符串 保存文件路径示例： /Upload/image/
 * @param  string   $format  文件格式限制
 * @param  integer  $maxSize 允许的上传文件最大值 52428800
 * @return booler   返回ajax的json格式数据
 */
function ajaxUpload($path='file',$format='image',$maxSize='52428800'){

    ini_set('max_execution_time', '0');
    // 去除两边的/
    /*$path=trim($path,'/');
    // 添加Upload根目录
    $path=strtolower(substr($path, 0,6))==='upload' ? ucfirst($path) : 'Upload/'.$path;*/
    // 上传文件类型控制
    $ext_arr= array(
        'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
        'photo' => array('jpg', 'jpeg', 'png'),
        'flash' => array('swf', 'flv'),
        'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
        'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2','pdf')
    );

    if(!empty($_FILES)){
        // 上传文件配置
        $config=array(
            'maxSize'   =>  $maxSize,               // 上传文件最大为50M
            'rootPath'  =>  './Upload/',                   // 文件上传保存的根路径
            'savePath'  =>  '',         // 文件上传的保存路径（相对于根路径）
            'saveName'  =>  array('uniqid',''),     // 上传文件的保存规则，支持数组和字符串方式定义
            'autoSub'   =>  true,                  // 自动使用子目录保存上传文件 默认为true
            'exts'      =>  ''//isset($ext_arr[$format])?$ext_arr[$format]:'',

        );

        // 实例化上传
        $upload=new \Think\Upload($config);
        // 调用上传方法
        $info=$upload->upload();

        $data=array();
        $Img = D('Photo');
        if(!$info){
            // 返回错误信息
            $error=$upload->getError();
            $data['error_info']=$error;
            echo json_encode($data);
        }else{
            // 返回成功信息
            foreach($info as $file){
                //上传的图片同步保存到数据库表

                //把fangyuan表tupian字段更新为 1
                //M('Fangyuan')->where(array('bianhao'=>$_POST['fybh']))->setField('tupian',1);

                //为上传成功的图片生成缩略图
               /* $timg = new \Think\Image();

                $timg->open(trim($file['savepath'].$file['savename']));

                $newpathbig =  trim($file['savepath']).'b_'.substr($file['savename'],0,strrpos($file['savename'], '.')).'.'.$file['ext'];
                $newpath =  trim($file['savepath']).'t_'.substr($file['savename'],0,strrpos($file['savename'], '.')).'.'.$file['ext'];

                $timg->thumb(800,800)->save($newpathbig);
                $timg->thumb(300,300)->save($newpath);*/

                //删除原图
                //unlink('./Upload/'.session('gongsiid').'/'.$_POST['fybh'].'/'.$file['savename']);
                //rename($newpathbig,'./Upload/'.session('gongsiid').'/'.$_POST['fybh'].'/'.$file['savename']);
                //返回给AJAX
                $data['filePath']=trim($file['savepath'].$file['savename'],'.');

                ///记录到图片表
                $d['uid']       = 10000;
                $d['image']     =  $data['filePath'];
                //$d['fybh']      = 10000;
                $d['create_time'] = time();
                $Img->add($d);

                echo json_encode($data);
            }
        }
    }
}



