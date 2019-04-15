<?php

/**
 * 用户功能点数据
 * @author auto create
 */
class Privilege
{
	
	/** 
	 * 开放平台的app_key
	 **/
	public $appKey;
	
	/** 
	 * 排序数字
	 **/
	public $orderBy;
	
	/** 
	 * 创建者ID
	 **/
	public $ownerUserId;
	
	/** 
	 * 父功能编号
	 **/
	public $parentPrivilegeCode;
	
	/** 
	 * 功能编码
	 **/
	public $privilegeCode;
	
	/** 
	 * 权限级别
1 基础功能
2 solution功能
3 私有报表
	 **/
	public $privilegeLevel;
	
	/** 
	 * 功能点名称
	 **/
	public $privilegeName;
	
	/** 
	 * 1-前台功能，2-后端功能
	 **/
	public $privilegeType;
	
	/** 
	 * 功能URL
	 **/
	public $privilegeUrl;
	
	/** 
	 * 卖家ID
	 **/
	public $sellerId;	
}
?>