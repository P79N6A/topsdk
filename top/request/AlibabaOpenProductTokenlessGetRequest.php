<?php
/**
 * TOP API: alibaba.open.product.tokenless.get request
 * 
 * @author auto create
 * @since 1.0, 2016.07.05
 */
class AlibabaOpenProductTokenlessGetRequest
{
	/** 
	 * 1
	 **/
	private $productId;
	
	/** 
	 * 1
	 **/
	private $webSite;
	
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

	public function setWebSite($webSite)
	{
		$this->webSite = $webSite;
		$this->apiParas["web_site"] = $webSite;
	}

	public function getWebSite()
	{
		return $this->webSite;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.product.tokenless.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkNotNull($this->webSite,"webSite");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
