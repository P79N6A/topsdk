<?php

/**
 * 采购单信息
 * @author auto create
 */
class SupplyOrderDetail
{
	
	/** 
	 * 内部主订单ID
	 **/
	public $inner_main_order_id;
	
	/** 
	 * 是否自动生成订单
	 **/
	public $is_auto_make_order;
	
	/** 
	 * 当前中间表订单状态,0(未下单)、1(等待买家付款)、2(等待卖家发货)、3(等待买家收货)、4(已收货->交易成功)、5(交易关闭)
	 **/
	public $order_status;
	
	/** 
	 * 卖家备注
	 **/
	public $out_buyer_summary;
	
	/** 
	 * 淘宝主订单号
	 **/
	public $out_main_order_no;
	
	/** 
	 * 成交时间
	 **/
	public $out_order_gmt_create;
	
	/** 
	 * 父订单包含的子订单列表
	 **/
	public $sub_order_list;
	
	/** 
	 * 供应商Id
	 **/
	public $supplier_id;
	
	/** 
	 * 供应商昵称
	 **/
	public $supplier_nick_name;
	
	/** 
	 * 淘宝主订单状态
	 **/
	public $tb_main_order_status;	
}
?>