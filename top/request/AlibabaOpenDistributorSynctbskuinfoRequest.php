<?php
/**
 * TOP API: alibaba.open.distributor.synctbskuinfo request
 * 
 * @author auto create
 * @since 1.0, 2016.06.28
 */
class AlibabaOpenDistributorSynctbskuinfoRequest
{
	/** 
	 * 淘宝宝贝Id
	 **/
	private $itemId;
	
	/** 
	 * 需要同步sku信息的产品Id
	 **/
	private $productId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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
		return "alibaba.open.distributor.synctbskuinfo";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
