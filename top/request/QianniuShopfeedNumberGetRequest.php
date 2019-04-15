<?php
/**
 * TOP API: taobao.qianniu.shopfeed.number.get request
 * 
 * @author auto create
 * @since 1.0, 2015.05.13
 */
class QianniuShopfeedNumberGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.qianniu.shopfeed.number.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
