<?php

/** 
    +-------------------------------------------------------------------------
    | 开单大师（专业的房产ERP管理系统）
    +-------------------------------------------------------------------------
    | Copyright (c) 2008-2017 http://www.kaidandashi.com All rights reserved.
    +-------------------------------------------------------------------------
    | 本系统由淮南市银泰科技软件有限公司提供技术支持
    +-------------------------------------------------------------------------
    | QQ号：984784483
    +-------------------------------------------------------------------------
*/

/**
 * 用户与角色关联模型
 */
namespace Home\Model;
use Think\Model\RelationModel;
class UserRelationModel extends RelationModel {
	//定义主表
	protected $tableName = 'yonghu';

	//定义关联关系
	protected $_link = array(
		'role' => array(
			'mapping_type'=> self::MANY_TO_MANY,
			'class_name'=>'role',
			'foreign_key'=>'user_id',
			'relation_key'=>'role_id',
			'relation_table'=>'jjrxt_role_user',
			'mapping_fields'=>'id,name,remark'
			),
		);
}
?>