<?php
/**
 * TOP API: alibaba.open.relation.endconsignrelationbyconsigner request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenRelationEndconsignrelationbyconsignerRequest
{
	/** 
	 * 供应商LoginId
	 **/
	private $supplierLoginId;
	
	private $apiParas = array();
	
	public function setSupplierLoginId($supplierLoginId)
	{
		$this->supplierLoginId = $supplierLoginId;
		$this->apiParas["supplier_login_id"] = $supplierLoginId;
	}

	public function getSupplierLoginId()
	{
		return $this->supplierLoginId;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.relation.endconsignrelationbyconsigner";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->supplierLoginId,"supplierLoginId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
