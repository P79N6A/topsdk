<?php
/**
 * TOP API: alibaba.open.supplier.removeproductlinerelation request
 * 
 * @author auto create
 * @since 1.0, 2016.06.28
 */
class AlibabaOpenSupplierRemoveproductlinerelationRequest
{
	/** 
	 * 供应商产品Id列表,Long类型的Json数组串
	 **/
	private $productIds;
	
	/** 
	 * 需要解除关系的产品线Id
	 **/
	private $productlineId;
	
	private $apiParas = array();
	
	public function setProductIds($productIds)
	{
		$this->productIds = $productIds;
		$this->apiParas["product_ids"] = $productIds;
	}

	public function getProductIds()
	{
		return $this->productIds;
	}

	public function setProductlineId($productlineId)
	{
		$this->productlineId = $productlineId;
		$this->apiParas["productline_id"] = $productlineId;
	}

	public function getProductlineId()
	{
		return $this->productlineId;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.supplier.removeproductlinerelation";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productIds,"productIds");
		RequestCheckUtil::checkNotNull($this->productlineId,"productlineId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
