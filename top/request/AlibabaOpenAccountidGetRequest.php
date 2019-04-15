<?php
/**
 * TOP API: alibaba.open.accountid.get request
 * 
 * @author auto create
 * @since 1.0, 2016.05.30
 */
class AlibabaOpenAccountidGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.open.accountid.get";
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
