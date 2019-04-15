<?php
/**
 * TOP API: alibaba.open.productline.addproductline request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenProductlineAddproductlineRequest
{
	/** 
	 * 分组名称
	 **/
	private $productLineName;
	
	private $apiParas = array();
	
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
		return "alibaba.open.productline.addproductline";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productLineName,"productLineName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
