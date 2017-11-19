<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/19
 * Time: 15:56
 */
namespace Api\Controller;

class LoginController extends BaseController {

    // 微信登录
    public function weixin_login(){

        $data = file_get_contents("php://input");
        $data = json_decode($data,true);
        //\Think\Log::write('post_data---'.$data.'I---'.I('code'),'WARN');
        $session_id = $data['session_id'];
        $session_db = M('Session');
        $users_db=M('users');
        $session=$session_db->where(['session_id'=>$session_id])->find();
        if( !empty( $session ) ){
            $userinfo = getUserInfoById($session['user_id']);
            $this->returnApiSuccessWithData(['sessionId'=>$session_id,'userInfo'=>$userinfo]);
        }else{
            $iv=$data['iv']; //把空格转成+
            $encryptedData=urldecode($data['encryptedData']);  //解码
            $code=$data['code']; //把空格转成+
            //\Think\Log::write('code---'.$code.'encry---'.$encryptedData.'iv---'.$iv,'WARN');
            $msg=getUserInfo($code,$encryptedData,$iv); //获取微信用户信息（openid）

            //\Think\Log::write('weixin_userData---'.json_encode($msg));

            if($msg['errCode']==0){
                $open_id=$msg['data']->openId;

                $userInfo=$users_db->where(['appid'=>$open_id])->find();

                if(!$userInfo||empty($userInfo)){
                    $users_db->add([
                        'appid'=>$open_id,
                        'nickname'=>$msg['data']->nickName,
                        'gender'=>$msg['data']->gender,
                        'city'=>$msg['data']->city,
                        'province'=>$msg['data']->province,
                        'city'=>$msg['data']->city,
                        'country'=>$msg['data']->country,
                        'avatarUrl'=>$msg['data']->avatarUrl,
                        'unionId'=>'',
                        'last_time'=>time()
                    ]); //用户信息入库
                    $userInfo = getUserInfoByAppid($open_id);

                    //生成3rd_session
                    $newSessionId=`head -n 80 /dev/urandom | tr -dc A-Za-z0-9 | head -c 168`;
                    //$newSessionId = md5(time().$open_id);
                    $session_db->add(['user_id'=>$userInfo['id'],'session_id'=>$newSessionId,'created_at'=>time()]); //保存session
                }

                if($newSessionId){
                    $this->returnApiSuccessWithData(['sessionId'=>$newSessionId,'userInfo'=>$userInfo]);
                }else{
                    $user_session = $session_db->where(['user_id'=>$userInfo['id']])->find();
                    $this->returnApiSuccessWithData(['sessionId'=>$user_session['session_id'],'userInfo'=>$userInfo]);
                }
            }else{
                $this->returnApiErrorWithMsg('用户信息获取失败！',2);
            }

        }
    }
}