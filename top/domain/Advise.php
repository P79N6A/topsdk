<?php

/**
 * 商品优化记录
 * @author auto create
 */
class Advise
{
	
	/** 
	 * 提醒优化的详细记录
	 **/
	public $advise_details;
	
	/** 
	 * 记录创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 优化结束时间
	 **/
	public $gmt_end;
	
	/** 
	 * 记录修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 优化开始时间
	 **/
	public $gmt_start;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 宝贝违规大类、提醒大类，如果有多个使用","分割 :1,3,5
	 **/
	public $rule_types;
	
	/** 
	 * 宝贝违规大类、提醒大类名称，与rule_types对应，将对应的id翻译成描述
	 **/
	public $rule_types_name;
	
	/** 
	 * 卖家ID
	 **/
	public $seller_id;
	
	/** 
	 * 记录的状态：1：系统处理；2:卖家编辑；3:审核失败
	 **/
	public $status;
	
	/** 
	 * 版本记录信息
	 **/
	public $sync_version;	
}
?>