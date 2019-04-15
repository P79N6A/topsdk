<?php

/**
 * 商品屏蔽降权记录
 * @author auto create
 */
class Shield
{
	
	/** 
	 * 记录创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 记录修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 违规大类
	 **/
	public $rule_types;
	
	/** 
	 * 违规大类名称
	 **/
	public $rule_types_name;
	
	/** 
	 * 卖家ID
	 **/
	public $seller_id;
	
	/** 
	 * 屏蔽降权详情
	 **/
	public $shield_details;
	
	/** 
	 * 记录的状态：1：系统处理；2:卖家编辑；3:审核失败
	 **/
	public $status;
	
	/** 
	 * 记录版本信息
	 **/
	public $sync_version;	
}
?>