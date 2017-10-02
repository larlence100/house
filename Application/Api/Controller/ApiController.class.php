<?php
namespace Api\Controller;
use Think\Controller\RestController;

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

    public function returnApiError($msg = self::ERROR_MSG, $array = [])
    {
        $data = [
            'code'=>$this->statusCode,
            'msg' => $msg,
            'data' => $array
        ];
        $this->retutnJson($data);
    }

    public function returnApiSuccess($array = [],$msg = self::SUCCESS_STATUS)
    {
        $data = [
            'code'=>$this->statusCode,
            'msg' => $msg,
            'data' => $array
        ];
        return $this->retutnJson($data);
    }


}