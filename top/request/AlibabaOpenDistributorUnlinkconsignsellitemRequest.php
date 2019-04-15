<?php
/**
 * TOP API: alibaba.open.distributor.unlinkconsignsellitem request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenDistributorUnlinkconsignsellitemRequest
{
	/** 
	 * 需要取消关联关系的产品Id
	 **/
	private $productId;
	
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

	public function getApiMethodName()
	{
		return "alibaba.open.distributor.unlinkconsignsellitem";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
