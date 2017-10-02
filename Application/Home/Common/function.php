<?php
    /** 
        +-------------------------------------------------------------------------
        | 开单大师（专业的房产ERP管理系统）
        +-------------------------------------------------------------------------
        | Copyright (c) 2008-2017 http://www.kaidandashi.com All rights reserved.
        +-------------------------------------------------------------------------
        | 本系统由淮南市银泰科技软件有限公司提供技术支持
        +-------------------------------------------------------------------------
        | QQ号：984784483
        +-------------------------------------------------------------------------
    */

    /**
     * 解密 2017-5-3 jfour
     */
    function get_user($id,$lx){
        $user=M('yonghu')->where('id='.$id)->find();
        $bm=M('bumen')->where('id='.$user['bumen'])->getField('bmming');
        if ($lx=="1") {
            return $user['ygmingcheng'];
        }elseif ($lx=="2") {
            return $user['dianhua'];
        }elseif ($lx=="3") {
            return $bm;
        }
    }
    function get_peizhi($zdun,$zhi){
        $lxming=M('peizhi')->where(array('pzming'=>$zdun,'lxid'=>$zhi))->getField('lxming');
        return $lxming;
    }
    function dec($str) {
        $XorKey = array("177","25","187","85","147","109","68","71");
        $i;
        $j;
        $result = '';
        $j = 0;
        for ($i=1; $i < floor(strlen($str)/2)+1; $i++) { 

            $result = $result . chr(hexdec(substr($str,$i*2-2,2)) ^ $XorKey[$j]);           
            $j = ($j + 1) % 8;
        }
        return $result;

    }
    /**
     * 获取客户端的公网IP 2017-5-3 jfour
     */
    function get_client_ip1($type = 0) {
        $type   =  $type ? 1 : 0;
        static $ip  =   NULL;
        if ($ip !== NULL) return $ip[$type];
        if($_SERVER['HTTP_X_REAL_IP']){//nginx 代理模式下，获取客户端真实IP
            $ip=$_SERVER['HTTP_X_REAL_IP'];     
        }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {//客户端的ip
            $ip     =   $_SERVER['HTTP_CLIENT_IP'];
        }elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {//浏览当前页面的用户计算机的网关
            $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $pos    =   array_search('unknown',$arr);
            if(false !== $pos) unset($arr[$pos]);
            $ip     =   trim($arr[0]);
        }elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ip     =   $_SERVER['REMOTE_ADDR'];//浏览当前页面的用户计算机的ip地址
        }else{
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        // IP地址合法验证
        $long = sprintf("%u",ip2long($ip));
        $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
        return $ip[$type];
    }
    function node_merge($node, $access = null,$pid=0){
    	$arr = array();
    	foreach ($node as $v) {
    		if (is_array($access)) {
    			$v['access'] = in_array($v['id'],$access) ? 1 : 0;
    		}
    		if ($v['pid']==$pid) {
    			$v['child'] = node_merge($node,$access,$v['id']);
    			$arr[]=$v;
    		}
    	}
    	return $arr;
    	
    }

    function check_code($code, $id = ""){  
        $verify = new \Think\Verify();  
        return $verify->check($code, $id);  
    }  

    	function p ($arr){
    		echo '<pre>' . print_r($arr,true) . '</pre>';
    }
    function J($str){
    	return str_replace('./', '', str_replace('//', '/', $str));
    }
    /**
     * 获取客户端浏览器类型
     * @return string 浏览器类型返回字符串 unknown为未知浏览器类型
     */

    function getBrowser(){
        $agent=$_SERVER["HTTP_USER_AGENT"];
        if(strpos($agent,'MSIE')!==false || strpos($agent,'rv:11.0')) //ie11判断
        return "ie";
        else if(strpos($agent,'Firefox')!==false)
        return "firefox";
        else if(strpos($agent,'Chrome')!==false)
        return "chrome";
        else if(strpos($agent,'Opera')!==false)
        return 'opera';
        else if((strpos($agent,'Chrome')==false)&&strpos($agent,'Safari')!==false)
        return 'safari';
        else
        return 'unknown';
    }
    function ismobile() {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
            return true;
        
        //此条摘自TPM智能切换模板引擎，适合TPM开发
        if(isset ($_SERVER['HTTP_CLIENT']) &&'PhoneClient'==$_SERVER['HTTP_CLIENT'])
            return true;
        //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset ($_SERVER['HTTP_VIA']))
            //找不到为flase,否则为true
            return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
        //判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT'])) {
            $clientkeywords = array(
                'nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'
            );
            //从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                return true;
            }
        }
        //协议法，因为有可能不准确，放到最后判断
        if (isset ($_SERVER['HTTP_ACCEPT'])) {
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                return true;
            }
        }
        return false;
     }


    function format_date($time){
        $t=time()-$time;
        $f=array(
            '31536000'=>'年',
            '2592000'=>'个月',
            '604800'=>'星期',
            '86400'=>'天',
            '3600'=>'小时',
            '60'=>'分钟',
            '1'=>'秒'
        );
        foreach ($f as $k=>$v)    {
            if (0 !=$c=floor($t/(int)$k)) {
                return $c.$v.'前';
            }
        }
    }

    /**
     * 上传文件类型控制 此方法仅限ajax上传使用
     * @param  string   $path    字符串 保存文件路径示例： /Upload/image/
     * @param  string   $format  文件格式限制
     * @param  integer  $maxSize 允许的上传文件最大值 52428800
     * @return booler   返回ajax的json格式数据
     */
    function ajax_upload($path='file',$format='image',$maxSize='52428800'){
        ini_set('max_execution_time', '0');
        // 去除两边的/
        $path=trim($path,'/');
        // 添加Upload根目录
        $path=strtolower(substr($path, 0,6))==='upload' ? ucfirst($path) : 'Upload/'.$path;
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
                    'rootPath'  =>  './',                   // 文件上传保存的根路径
                    'savePath'  =>  './'.$path.'/',         // 文件上传的保存路径（相对于根路径）
                    'saveName'  =>  array('uniqid',''),     // 上传文件的保存规则，支持数组和字符串方式定义
                    'autoSub'   =>  false,                  // 自动使用子目录保存上传文件 默认为true
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
                    $d['gongsiid'] = session('gongsiid');  
                    $d['uid'] = session('uid');
                    $d['image'] = $file['savename'];
                    $d['fybh'] = $_POST['fybh'];
                    $d['create_time'] = time();
                    $Img->add($d);
                    //把fangyuan表tupian字段更新为 1
                    M('Fangyuan')->where(array('bianhao'=>$_POST['fybh']))->setField('tupian',1);
                    
                    //为上传成功的图片生成缩略图
                    $timg = new \Think\Image();
                    $timg->open(trim($file['savepath'].$file['savename']));
                    
                    $newpathbig =  trim($file['savepath']).'b_'.substr($file['savename'],0,strrpos($file['savename'], '.')).'.'.$file['ext'];
                    $newpath =  trim($file['savepath']).'t_'.substr($file['savename'],0,strrpos($file['savename'], '.')).'.'.$file['ext']; 
                    
                    $timg->thumb(800,800)->save($newpathbig); 
                    $timg->thumb(300,300)->save($newpath);

                    //删除原图
                    unlink('./Upload/'.session('gongsiid').'/'.$_POST['fybh'].'/'.$file['savename']);                 
                    rename($newpathbig,'./Upload/'.session('gongsiid').'/'.$_POST['fybh'].'/'.$file['savename']);
                    //返回给AJAX
                    $data['name']=trim($file['savepath'].$file['savename'],'.');

                    echo json_encode($data);
                }               
            }
        }
    }
    function ajax_upload_xq($path='file',$format='image',$maxSize='52428800'){
        ini_set('max_execution_time', '0');
        // 去除两边的/
        $path=trim($path,'/');
        // 添加Upload根目录
        $path=strtolower(substr($path, 0,6))==='upload' ? ucfirst($path) : 'Upload/'.$path;
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
                    'rootPath'  =>  './',                   // 文件上传保存的根路径
                    'savePath'  =>  './'.$path.'/',         // 文件上传的保存路径（相对于根路径）
                    'saveName'  =>  array('uniqid',''),     // 上传文件的保存规则，支持数组和字符串方式定义
                    'autoSub'   =>  false,                  // 自动使用子目录保存上传文件 默认为true
                    'exts'      =>  ''//isset($ext_arr[$format])?$ext_arr[$format]:'',

                );
            // 实例化上传
            $upload=new \Think\Upload($config);
            // 调用上传方法
            $info=$upload->upload();
            $data=array();
            $Img = D('xqphoto');  
            if(!$info){
                // 返回错误信息
                $error=$upload->getError();
                $data['error_info']=$error;
                echo json_encode($data);
            }else{
                // 返回成功信息
                foreach($info as $file){
                    //上传的图片同步保存到数据库表
                    $d['gongsiid'] = session('gongsiid');  
                    $d['uid'] = session('uid');
                    $d['image'] = $file['savename'];
                    $d['xqid'] = $_POST['xqid'];
                    $d['create_time'] = time();
                    $Img->add($d);
                    //把fangyuan表tupian字段更新为 1
                    M('Xiaoqu')->where(array('id'=>$_POST['xqid']))->setField('tupian',1);
                    
                    //为上传成功的图片生成缩略图
                    $timg = new \Think\Image();
                    $timg->open(trim($file['savepath'].$file['savename']));
                    
                    $newpathbig =  trim($file['savepath']).'b_'.substr($file['savename'],0,strrpos($file['savename'], '.')).'.'.$file['ext'];
                    $newpath =  trim($file['savepath']).'t_'.substr($file['savename'],0,strrpos($file['savename'], '.')).'.'.$file['ext']; 
                    
                    $timg->thumb(800,800)->save($newpathbig); 
                    $timg->thumb(300,300)->save($newpath);

                    //删除原图
                    unlink('./Upload/'.session('gongsiid').'/'.$_POST['xqid'].'/'.$file['savename']);                 
                    rename($newpathbig,'./Upload/'.session('gongsiid').'/'.$_POST['xqid'].'/'.$file['savename']);
                    //返回给AJAX
                    $data['name']=trim($file['savepath'].$file['savename'],'.');

                    echo json_encode($data);
                }               
            }
        }
    }
?>