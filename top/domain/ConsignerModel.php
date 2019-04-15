<?php

/**
 * 结果集合
 * @author auto create
 */
class ConsignerModel
{
	
	/** 
	 * 创建关系时间
	 **/
	public $consign_create_time;
	
	/** 
	 * 合作状态
	 **/
	public $consign_status;
	
	/** 
	 * 分销商等级
	 **/
	public $consigner_grade;
	
	/** 
	 * 分销商登录ID
	 **/
	public $consigner_login_id;
	
	/** 
	 * 近180交易金额（分）
	 **/
	public $last_amount;
	
	/** 
	 * 近180交易订单
	 **/
	public $last_order;
	
	/** 
	 * 终止关系原因
	 **/
	public $terminate_reason;
	
	/** 
	 * 终止关系时间
	 **/
	public $terminate_time;	
}
?>