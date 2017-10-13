<?php

    function getHouseInfoById($id){
        $house = M('fangyuan');
        $data =  $house->find($id);
        return $data;
    }

    function groupByArray($result,$key)
    {
        foreach ($result as $k=>$v){
            $data[$v[$key]][] = $v;
        }
        return $data;
    }




