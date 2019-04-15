<?php
/**
 * TOP API: alibaba.open.distributor.modifysupplyorder request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenDistributorModifysupplyorderRequest
{
	/** 
	 * 购买数量
	 **/
	private $buyAmount;
	
	/** 
	 * 采购单Id
	 **/
	private $orderId;
	
	/** 
	 * sku规格Id，例如af478130f6c683c4c77bb511796617d7，非sku类型则不用传
	 **/
	private $specId;
	
	/** 
	 * sku规格信息的Map,key为规格属性名称，value为规格属性值，例如{"颜色":"黄色","尺码":"XS"}
	 **/
	private $specInfo;
	
	private $apiParas = array();
	
	public function setBuyAmount($buyAmount)
	{
		$this->buyAmount = $buyAmount;
		$this->apiParas["buy_amount"] = $buyAmount;
	}

	public function getBuyAmount()
	{
		return $this->buyAmount;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setSpecId($specId)
	{
		$this->specId = $specId;
		$this->apiParas["spec_id"] = $specId;
	}

	public function getSpecId()
	{
		return $this->specId;
	}

	public function setSpecInfo($specInfo)
	{
		$this->specInfo = $specInfo;
		$this->apiParas["spec_info"] = $specInfo;
	}

	public function getSpecInfo()
	{
		return $this->specInfo;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.distributor.modifysupplyorder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyAmount,"buyAmount");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
