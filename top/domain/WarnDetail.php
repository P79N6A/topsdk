<?php

/**
 * 商品提醒记录，一个商品如果被提醒对应一条提醒记录
 * @author auto create
 */
class WarnDetail
{
	
	/** 
	 * 提醒对应的处罚案例（提醒到期后将使用此案例处罚商品）
	 **/
	public $case_code;
	
	/** 
	 * 案例名称：case_code的描述
	 **/
	public $case_code_name;
	
	/** 
	 * 此提醒对应的具体说明链接
	 **/
	public $detail_url;
	
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
	 * 抓取商品的模型id
	 **/
	public $ifd_id;
	
	/** 
	 * 处罚方式:0.其他; 1.下架; 2.删除; -1.CC
	 **/
	public $punish_mode;
	
	/** 
	 * 商品被提醒的原因
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
}
?>