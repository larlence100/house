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

    public function collect()
    {
        try{
            $fangyuan_id = I('fangyuan_id');
            $fangyuan = getFangYuanById($fangyuan_id);
            $check = checkUserFangyuanCollect($fangyuan['id'],$this->user->id);
            if($check){
                throw new Exception('您已经收藏了改房源信息');
            }else{
                $result = M('shoucang')->add(['user_id'=>$this->user->id,'fyid'=>$fangyuan_id,'created_at'=>time()]);
                if(!$result){
                    throw new Exception('收藏失败');
                }
            }
            return $this->returnApiSuccessWithMsg('收藏成功！');
        }catch (Exception $e){
            return $this->returnApiErrorWithMsg($e->getMessage());
        }
    }

    public function uncollect()
    {
        try{
            $fangyuan_id = I('fangyuan_id');
            $fangyuan = getFangYuanById($fangyuan_id);
            $check = checkUserFangyuanCollect($fangyuan['id'],$this->user->id);
            if(!$check){
                throw new Exception('您还未收藏该房源');
            }else{
                $result = M('shoucang')->where(['user_id'=>$this->user->id,'fyid'=>$fangyuan_id])->delete();
                if(!$result){
                    throw new Exception('取消失败');
                }
            }
            return $this->returnApiSuccessWithMsg('取消成功！');
        }catch (Exception $e){
            return $this->returnApiErrorWithMsg($e->getMessage());
        }
    }

}