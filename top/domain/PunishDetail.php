<?php

/**
 * 处罚详细记录，每个宝贝对应一条记录
 * @author auto create
 */
class PunishDetail
{
	
	/** 
	 * 处罚对应的案例，可能为空
	 **/
	public $case_code;
	
	/** 
	 * 案例名称：case_code描述
	 **/
	public $case_code_name;
	
	/** 
	 * 此项处罚对应的详细说明链接
	 **/
	public $detail_url;
	
	/** 
	 * 记录创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 记录修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品处罚原因
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