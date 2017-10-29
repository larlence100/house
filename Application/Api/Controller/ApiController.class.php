<?php
namespace Api\Controller;
use Think\Controller\RestController;
use Think\Exception;

/**
 * User: liujianjiang
 */
class ApiController extends RestController
{
    protected $statusCode = 200;

    const SUCCESS_STATUS = 0;
    const SUCCESS_MSG = '返回成功';

    const ERROR_STATUS = 1;
    const ERROR_MSG = '返回失败';

    const PARAM_ERROR_STATUS = 2;
    const PARAM_ERROR_MSG = '参数错误';

    public $user;

    public function _initialize()
    {
        try{
            $sessionId = I('session_id');
            if(empty($sessionId)){
                throw new Exception('sesison_id is not allow null');
            }
            $sessionData = getUserBySessionId($sessionId);
            if(empty($sessionData)){
                throw new Exception('sesison_id is error');
            }else{
                $userInfo = M('users')->where(['id'=>$sessionData['user_id']])->find();
                foreach($userInfo as $key=>$value){
                    $this->user->$key = $value;
                }
            }
        }catch (Exception $e){
            static::returnApiErrorWithMsg($e->getMessage(),2);
        }

    }


    public function getStatusCode(){
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        return $this->statusCode  = $statusCode;
    }

    public function retutnJson($data)
    {
        $this->response($data,'json',$this->statusCode);
    }


    public function returnApiSuccessWithMsg($msg = self::SUCCESS_MSG,$code =self::SUCCESS_STATUS)
    {
        $data = [
            'code'=>$code,
            'msg' => $msg,
        ];
        $this->retutnJson($data);
    }

    public function returnApiErrorWithMsg($msg = self::ERROR_MSG,$code =self::ERROR_STATUS)
    {
        $data = [
            'code'=>$code,
            'msg' => $msg,
        ];
        $this->retutnJson($data);
    }

    public function returnApiSuccessWithData($array = [],$msg = self::SUCCESS_MSG,$code = self::SUCCESS_STATUS)
    {
        $data = [
            'code'=>$code,
            'msg' => $msg,
            'data' => $array
        ];
        return $this->retutnJson($data);
    }

    public function returnApiErrorWithData($array = [], $msg = self::ERROR_MSG,$code = self::ERROR_STATUS)
    {
        $data = [
            'code'=>$code,
            'msg' => $msg,
            'data' => $array
        ];
        $this->retutnJson($data);
    }


}