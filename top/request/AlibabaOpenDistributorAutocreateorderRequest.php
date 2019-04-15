<?php
/**
 * TOP API: alibaba.open.distributor.autocreateorder request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenDistributorAutocreateorderRequest
{
	/** 
	 * 采购单列表
	 **/
	private $supplyOrders;
	
	private $apiParas = array();
	
	public function setSupplyOrders($supplyOrders)
	{
		$this->supplyOrders = $supplyOrders;
		$this->apiParas["supply_orders"] = $supplyOrders;
	}

	public function getSupplyOrders()
	{
		return $this->supplyOrders;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.distributor.autocreateorder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->supplyOrders,"supplyOrders");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
