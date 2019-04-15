<?php
/**
 * TOP API: alibaba.open.areacode.get request
 * 
 * @author auto create
 * @since 1.0, 2016.05.17
 */
class AlibabaOpenAreacodeGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.open.areacode.get";
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
