<?php

/**
 * 订单列表
 * @author auto create
 */
class IsvOrderItemDto
{
	
	/** 
	 * 订单状态 B:服务前，S:服务中，P：挂起，E：关闭，C:作废
	 **/
	public $biz_status;
	
	/** 
	 * 订单详细状态 audit_pass:审核通过，issue_ready：待发布，service：服务中，suspend：挂起 arrear_suspend：欠费挂起，closed：关闭，cancel：作废
	 **/
	public $biz_status_ext;
	
	/** 
	 * 执行金额
	 **/
	public $execute_price;
	
	/** 
	 * 下单时间
	 **/
	public $gmt_create;
	
	/** 
	 * 到期时间
	 **/
	public $gmt_service_end;
	
	/** 
	 * 会员memberId
	 **/
	public $member_id;
	
	/** 
	 * 到帐金额
	 **/
	public $payment_amount;
	
	/** 
	 * 产品名称
	 **/
	public $product_name;	
}
?>