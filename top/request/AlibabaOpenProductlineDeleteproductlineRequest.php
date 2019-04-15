<?php
/**
 * TOP API: alibaba.open.productline.deleteproductline request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenProductlineDeleteproductlineRequest
{
	/** 
	 * 分组 id
	 **/
	private $productLineId;
	
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

	public function getApiMethodName()
	{
		return "alibaba.open.productline.deleteproductline";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productLineId,"productLineId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
