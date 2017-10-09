<?php

    function getHouseInfoById($id){
        $house = M('fangyuan');
        $data =  $house->where(['id'=>$id])->select();
        return $data;
    }




