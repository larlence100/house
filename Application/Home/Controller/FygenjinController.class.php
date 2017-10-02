<?php
namespace Home\Controller;
use Think\Controller;
class FygenjinController extends CommonController {
	public function all(){
		$fygenjinModel = M('Fygenjin');
		$count = $fygenjinModel->where()->count();
		$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
		$show = $Page->show();	//分页显示输出
		$fygenjinList = $fygenjinModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
		$this->assign('page',$show);	//赋值分页输出
		$this->assign('fygenjinList', $fygenjinList);
		$this->display();
	}
}