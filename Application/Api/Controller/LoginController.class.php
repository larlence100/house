<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/19
 * Time: 15:56
 */
namespace Api\Controller;

class LoginController extends ApiController {

    // 微信登录
    public function weixin_login(){


        $session_id=I('get.sessionid','');

        $session_db=M('Session');
        $session=$session_db->where(['session_id'=>$session_id])->find();
//var_dump($session);exit;
        if( !empty( $session ) ){
            $this->ajaxReturn(['error_code'=>0,'sessionid'=>$session_id]);
        }else{

            $iv=define_str_replace(I('get.iv')); //把空格转成+
            $encryptedData=urldecode(I('get.encryptedData'));  //解码
            $code=define_str_replace(I('get.code')); //把空格转成+
            $msg=getUserInfo($code,$encryptedData,$iv); //获取微信用户信息（openid）
           /* $msg = [
                'errCode' =>0,
                'open_id' => 44444
            ];*/

            if($msg['errCode']==0){
                $open_id=$msg['open_id'];
                $users_db=M('users');
                $info=$users_db->where(['openid'=>$open_id])->find();

                if(!$info||empty($info)){
                    $users_db->add(['openid'=>$open_id,'username'=>'','last_time'=>time()]); //用户信息入库
                    $info = $users_db->where(['openid'=>$open_id])->find();                //获取用户信息
                    $session_id=`head -n 80 /dev/urandom | tr -dc A-Za-z0-9 | head -c 168`;  //生成3rd_session
                    $session_id=111;  //生成3rd_session
                    $session_db->add(['user_id'=>$info['id'],'session_id'=>$session_id]); //保存session
                }

                if($session_id){
                    $this->ajaxReturn(['error_code'=>0,'sessionid'=>$session_id]);  //把3rd_session返回给客户端
                }else{
                    $user_session = $session_db->where(['user_id'=>$info['id']])->find();
                    $this->ajaxReturn(['error_code'=>0,'sessionid'=>$user_session['session_id']]);
                }

            }else{
                $this->ajaxReturn(['error_code'=>'用户信息获取失败！']);
            }

        }
    }

    public function getUserInfo($code,$encryptedData,$iv){

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
}