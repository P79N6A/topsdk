<?php
/**
 * TOP API: alibaba.open.distributor.queryskubyspecid request
 * 
 * @author auto create
 * @since 1.0, 2016.05.18
 */
class AlibabaOpenDistributorQueryskubyspecidRequest
{
	/** 
	 * 产品Id
	 **/
	private $productId;
	
	/** 
	 * sku的SpecId
	 **/
	private $specId;
	
	private $apiParas = array();
	
	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
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

	public function getApiMethodName()
	{
		return "alibaba.open.distributor.queryskubyspecid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkNotNull($this->specId,"specId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
