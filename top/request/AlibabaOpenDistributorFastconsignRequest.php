<?php
/**
 * TOP API: alibaba.open.distributor.fastconsign request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenDistributorFastconsignRequest
{
	/** 
	 * 需要一键代销的产品Id
	 **/
	private $productId;
	
	/** 
	 * 供应商memberId
	 **/
	private $supplierMemberId;
	
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

	public function setSupplierMemberId($supplierMemberId)
	{
		$this->supplierMemberId = $supplierMemberId;
		$this->apiParas["supplier_member_id"] = $supplierMemberId;
	}

	public function getSupplierMemberId()
	{
		return $this->supplierMemberId;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.distributor.fastconsign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkNotNull($this->supplierMemberId,"supplierMemberId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
