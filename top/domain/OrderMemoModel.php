<?php

/**
 * 卖家备注
 * @author auto create
 */
class OrderMemoModel
{
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 主键id
	 **/
	public $id;
	
	/** 
	 * 会员id
	 **/
	public $member_id;
	
	/** 
	 * 订单id
	 **/
	public $order_id;
	
	/** 
	 * 备注内容
	 **/
	public $remark;
	
	/** 
	 * 备注图标
	 **/
	public $remark_icon;	
}
?>