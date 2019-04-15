<?php

/**
 * 采购单列表
 * @author auto create
 */
class SupplyOrderInfo
{
	
	/** 
	 * 立即下单时，提交给下单页面的参数
	 **/
	public $flow;
	
	/** 
	 * 立即下单时，提交给下单页面的参数
	 **/
	public $id;
	
	/** 
	 * 供应商的memberId
	 **/
	public $member_id;
	
	/** 
	 * 采购单信息
	 **/
	public $order_model;
	
	/** 
	 * 立即下单时，提交的给下单页面的url
	 **/
	public $order_url;	
}
?>