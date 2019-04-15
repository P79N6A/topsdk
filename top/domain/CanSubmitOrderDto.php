<?php

/**
 * model
 * @author auto create
 */
class CanSubmitOrderDto
{
	
	/** 
	 * 是否可以下预约单
	 **/
	public $can_create_appoint_order;
	
	/** 
	 * 是否可以下及时单
	 **/
	public $can_create_instant_order;
	
	/** 
	 * 订单运费价格计算规则
	 **/
	public $service_price_info;
	
	/** 
	 * 服务时间范围
	 **/
	public $service_time_info_list;	
}
?>