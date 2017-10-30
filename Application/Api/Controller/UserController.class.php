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

    public function mycollect()
    {
        try{
           $collect = M('shoucang')->where(['user_id'=>$this->user->id])->getField('fyid',true);

            $pageSize = I('pagesize')? I('pagesize'): 20;
            $leixing = I('leixing');
            $where['id'] = array('in',$collect);
            $where['leixing'] = array('eq',$leixing);
            $where['status'] = array('eq',1);
            $count = M('fangyuan')->where($where)->order('lurusj')->count();
            $Page  = new \Think\Page($count['0']['count(*)'],$pageSize);
            $list = M('fangyuan')->where($where)->field('yezhudianhua,yezhu,yezhulx,yezhugx',true)->order('lurusj')->limit($Page->firstRow.','.$Page->listRows)->select();
            return $this->returnApiSuccessWithData(['count'=>$count[0]['total'],'pagesize'=>$pageSize,'list'=>$list]);
        }catch (Exception $e){
            return $this->returnApiErrorWithMsg($e->getMessage());
        }
    }

    public function bind_mobile()
    {
        try{
            $verify = I('verify');
            $mobile = I('mobile');

            if(empty($verify) || empty($mobile)){
                throw new Exception('手机号码和验证码不为空！');
            }
            $checkCode = getVerifyCode($mobile,$verify);
            if(!$checkCode) {
                throw new Exception('验证码不正确');
            }
            $row = M('users')->where(['id'=>$this->user->id])->save(['mobile'=>$mobile]);
            if(!$row){
                throw new Exception('绑定失败！');
            }
            //改变验证码使用状态
            updateVerifyCode($checkCode['id']);

            return $this->returnApiSuccessWithMsg('绑定成功!');
        }catch (Exception $e){
            return $this->returnApiErrorWithMsg($e->getMessage());
        }
    }

    /**
     * 我的发布
     * author Fox
     */
    public function myreleased()
    {
        try{
            $pageSize = I('pagesize')? I('pagesize'): 20;
            $leixing = I('leixing');
            $where['weihurenid'] = array('eq',$this->user-id);
            $where['leixing'] = array('eq',$leixing);
            $count = M('fangyuan')->where($where)->order('lurusj')->count();
            $Page  = new \Think\Page($count['0']['count(*)'],$pageSize);
            $list = M('fangyuan')->where($where)->field('yezhudianhua,yezhu,yezhulx,yezhugx',true)->order('lurusj')->limit($Page->firstRow.','.$Page->listRows)->select();

            foreach($list as $k=>$v){
                $list[$k]['photo'] = getHousePhoto($v['bianhao']);
            }

            return $this->returnApiSuccessWithData(['count'=>$count[0]['total'],'pagesize'=>$pageSize,'list'=>$list]);
        }catch (Exception $e){
            return $this->returnApiErrorWithMsg($e->getMessage());
        }
    }

}