<?php
/**
 * TOP API: alibaba.open.supplier.modifyproductlinerelation request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenSupplierModifyproductlinerelationRequest
{
	/** 
	 * 需要解除关系的产品线Id
	 **/
	private $fromProductlineId;
	
	/** 
	 * 供应商产品Id列表,Long类型的Json数组串
	 **/
	private $productIds;
	
	/** 
	 * 需要建立关系的产品线Id
	 **/
	private $toProductlineId;
	
	private $apiParas = array();
	
	public function setFromProductlineId($fromProductlineId)
	{
		$this->fromProductlineId = $fromProductlineId;
		$this->apiParas["from_productline_id"] = $fromProductlineId;
	}

	public function getFromProductlineId()
	{
		return $this->fromProductlineId;
	}

	public function setProductIds($productIds)
	{
		$this->productIds = $productIds;
		$this->apiParas["product_ids"] = $productIds;
	}

	public function getProductIds()
	{
		return $this->productIds;
	}

	public function setToProductlineId($toProductlineId)
	{
		$this->toProductlineId = $toProductlineId;
		$this->apiParas["to_productline_id"] = $toProductlineId;
	}

	public function getToProductlineId()
	{
		return $this->toProductlineId;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.supplier.modifyproductlinerelation";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fromProductlineId,"fromProductlineId");
		RequestCheckUtil::checkNotNull($this->productIds,"productIds");
		RequestCheckUtil::checkNotNull($this->toProductlineId,"toProductlineId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
