<?php
/**
 * TOP API: alibaba.open.distributor.linkconsignsellitem request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenDistributorLinkconsignsellitemRequest
{
	/** 
	 * 淘宝宝贝链接
	 **/
	private $itemUrl;
	
	/** 
	 * 需要关联代销关系的产品Id
	 **/
	private $productId;
	
	private $apiParas = array();
	
	public function setItemUrl($itemUrl)
	{
		$this->itemUrl = $itemUrl;
		$this->apiParas["item_url"] = $itemUrl;
	}

	public function getItemUrl()
	{
		return $this->itemUrl;
	}

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
		return "alibaba.open.distributor.linkconsignsellitem";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemUrl,"itemUrl");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
