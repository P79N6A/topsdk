<?php

/**
 * {}
 * @author auto create
 */
class InsuranceOrderRequest
{
	
	/** 
	 * 预约时间
	 **/
	public $appointment;
	
	/** 
	 * 设备号
	 **/
	public $device_id;
	
	/** 
	 * 物品类型
	 **/
	public $goods_type;
	
	/** 
	 * 订单来源
	 **/
	public $order_source;
	
	/** 
	 * 外部订单号
	 **/
	public $out_order_id;
	
	/** 
	 * 收件人信息
	 **/
	public $receiver;
	
	/** 
	 * 寄件人信息
	 **/
	public $sender;
	
	/** 
	 * 服务类型
	 **/
	public $service_type;
	
	/** 
	 * 货物类型
	 **/
	public $weight_type;	
}
?>