<?php

/**
 * 商品提醒对象，违规商品被抓取并配置了提醒后生成一条此记录
 * @author auto create
 */
class Warn
{
	
	/** 
	 * 记录创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 提醒结束时间
	 **/
	public $gmt_end;
	
	/** 
	 * 记录修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 提醒开始时间
	 **/
	public $gmt_start;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 处罚方式:0.其他; 1.下架; 2.删除; -1.CC
	 **/
	public $punish_mode;
	
	/** 
	 * 处罚扣分，实际扣分*100.故扣0.2分=200
	 **/
	public $punish_score;
	
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
	 * 记录的状态：1：系统处理；2:卖家编辑；3:审核失败
	 **/
	public $status;
	
	/** 
	 * 记录版本信息
	 **/
	public $sync_version;
	
	/** 
	 * 一条提醒记录对应多条提醒详细记录，一个商品被多个规则抓取后会产生多种提醒记录
	 **/
	public $warn_details;	
}
?>