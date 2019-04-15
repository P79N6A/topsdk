<?php

/**
 * 处罚记录，宝贝贝处罚后生成一个处罚记录，包含一个PunishDetail对象
 * @author auto create
 */
class Punish
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
	 * 处罚信息信息
	 **/
	public $punish_detail;
	
	/** 
	 * 此字段无效，请勿使用
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
	 * 记录版本信息
	 **/
	public $sync_version;	
}
?>