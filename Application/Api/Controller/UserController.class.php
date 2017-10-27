<?php
namespace Api\Controller;
use Think\Exception;

/**
 * User: liujianjiang
 */
class UserController extends ApiController
{

    public function getUserinfo()
    {
        try{
            $sessionId = I('session_id');
            $session = getUserBySessionId($sessionId);
            $userinfo = getUserInfoById($session['user_id']);
            if(empty($userinfo)){
                throw new Exception('获取用户信息失败');
            }

            return $this->returnApiSuccessWithData($userinfo);
        }catch (Exception $e){
            return $this->returnApiErrorWithMsg($e->getMessage());
        }

    }

}