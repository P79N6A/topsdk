<?php

/**
 * 物流单列表
 * @author auto create
 */
class LogisticsOrderModel
{
	
	/** 
	 * 运费(单位为分)
	 **/
	public $carriage;
	
	/** 
	 * 发货街道地址
	 **/
	public $from_address;
	
	/** 
	 * 发货区编码
	 **/
	public $from_area;
	
	/** 
	 * 发货市编码
	 **/
	public $from_city;
	
	/** 
	 * 发货联系手机
	 **/
	public $from_mobile;
	
	/** 
	 * 发货联系电话
	 **/
	public $from_phone;
	
	/** 
	 * 发货地址邮编
	 **/
	public $from_post;
	
	/** 
	 * 发货省编码
	 **/
	public $from_province;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 发货时间
	 **/
	public $gmt_send;
	
	/** 
	 * 主键id
	 **/
	public $id;
	
	/** 
	 * 物流公司运单号
	 **/
	public $logistics_bill_no;
	
	/** 
	 * 物流公司
	 **/
	public $logistics_company;
	
	/** 
	 * 物流公司编号
	 **/
	public $logistics_company_id;
	
	/** 
	 * 物流单号
	 **/
	public $logistics_order_no;
	
	/** 
	 * 订单id
	 **/
	public $order_id;
	
	/** 
	 * 状态
	 **/
	public $status;
	
	/** 
	 * 收货人地址
	 **/
	public $to_area;
	
	/** 
	 * 收货联系人
	 **/
	public $to_contact;
	
	/** 
	 * 收货人邮编
	 **/
	public $to_post;
	
	/** 
	 * 收货省编码
	 **/
	public $to_province;
	
	/** 
	 * SELF_SEND_GOODS("0")自行发货，在线发货ONLINE_SEND_GOODS("1"，不需要物流的发货 NO_LOGISTICS_SEND_GOODS("2")
	 **/
	public $type;	
}
?>