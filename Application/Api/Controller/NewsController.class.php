<?php
namespace Api\Controller;
use Think\Exception;

/**
 * User: liujianjiang
 */
class NewsController extends ApiController
{
    const PAGESIZE = 20;


    public function news_list(){
        $pageSize = I('pagesize')? I('pagesize'): static::PAGESIZE;
        $table = 'jjrxt_news';
        $condition = "new_status=1";
        $count=M('news')->query("select count(*) as total from {$table} where {$condition}");
        $Page  = new \Think\Page($count['0']['count(*)'],$pageSize);
        $list="select * from {$table} where {$condition} order by `order` DESC limit ".$Page->firstRow.','.$Page->listRows;
        $Model = new \Think\Model;
        $fangyuan=$Model->query($list);
        foreach($fangyuan as $k=>$v){
            $fangyuan[$k]['photo'] = getHousePhoto($v['bianhao']);
        }
        return $this->returnApiSuccessWithData(['count'=>$count[0]['total'],'pagesize'=>$pageSize,'list'=>$fangyuan]);

    }

    public function news_detail()
    {
        $id = I('id');
        $model = M('news');
        $news = $model->where(['id'=>$id,'new_status'=>1])->find();
        if(!$news){
            $this->returnApiErrorWithMsg('未找到该新闻');
        }
        $this->returnApiSuccessWithData($news);
    }

}