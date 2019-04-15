<?php

/**
 * 结果集合
 * @author auto create
 */
class SupplierModel
{
	
	/** 
	 * 代销合作创建时间
	 **/
	public $consign_create_time;
	
	/** 
	 * 合作状态
	 **/
	public $consign_status;
	
	/** 
	 * 已铺货数量
	 **/
	public $distribution_num;
	
	/** 
	 * 近180交易金额（分）
	 **/
	public $last_amount;
	
	/** 
	 * 近180交易订单
	 **/
	public $last_order;
	
	/** 
	 * 会员memberId
	 **/
	public $member_id;
	
	/** 
	 * 供应商公司名称
	 **/
	public $supplier_company;
	
	/** 
	 * 供应商登录Id
	 **/
	public $supplier_login_id;	
}
?>