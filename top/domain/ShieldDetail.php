<?php

/**
 * 商品屏蔽降权详情记录
 * @author auto create
 */
class ShieldDetail
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
	 * 商品被屏蔽、降权的原因
	 **/
	public $reason;
	
	/** 
	 * 违规大类
	 **/
	public $rule_type;
	
	/** 
	 * 违规大类名称
	 **/
	public $rule_type_name;
	
	/** 
	 * 屏蔽降权建议
	 **/
	public $suggestion;	
}
?>