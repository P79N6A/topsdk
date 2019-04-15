<?php
/**
 * TOP API: alibaba.open.productline.updateproductline request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenProductlineUpdateproductlineRequest
{
	/** 
	 * 分组ID
	 **/
	private $productLineId;
	
	/** 
	 * 分组名称
	 **/
	private $productLineName;
	
	private $apiParas = array();
	
	public function setProductLineId($productLineId)
	{
		$this->productLineId = $productLineId;
		$this->apiParas["product_line_id"] = $productLineId;
	}

	public function getProductLineId()
	{
		return $this->productLineId;
	}

	public function setProductLineName($productLineName)
	{
		$this->productLineName = $productLineName;
		$this->apiParas["product_line_name"] = $productLineName;
	}

	public function getProductLineName()
	{
		return $this->productLineName;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.productline.updateproductline";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productLineId,"productLineId");
		RequestCheckUtil::checkNotNull($this->productLineName,"productLineName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
