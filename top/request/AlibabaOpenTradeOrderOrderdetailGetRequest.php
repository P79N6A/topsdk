<?php
/**
 * TOP API: alibaba.open.trade.order.orderdetail.get request
 * 
 * @author auto create
 * @since 1.0, 2017.04.13
 */
class AlibabaOpenTradeOrderOrderdetailGetRequest
{
	/** 
	 * 订单ID号
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.trade.order.orderdetail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
