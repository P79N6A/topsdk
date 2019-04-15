<?php

/**
 * 物流单及跟踪信息列表
 * @author auto create
 */
class Trace
{
	
	/** 
	 * 物流公司提供的运单号
	 **/
	public $logistics_bill_no;
	
	/** 
	 * 物流编号
	 **/
	public $logistics_id;
	
	/** 
	 * 流转信息列表
	 **/
	public $logistics_steps;
	
	/** 
	 * 交易订单号
	 **/
	public $order_id;
	
	/** 
	 * 物流节点信息列表
	 **/
	public $trace_node_list;	
}
?>