<?php

    function getHouseInfoById($id){
        $house = M('fangyuan');
        $data =  $house->where(['id'=>$id])->select();
        return $data;
    }

    function groupByArray($result,$key)
    {
        foreach ($result as $k=>$v){
            $data[$v[$key]][] = $v;
        }
        return $data;
    }




