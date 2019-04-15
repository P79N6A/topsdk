<?php
/**
 * TOP API: alibaba.open.wholesale.get request
 * 
 * @author auto create
 * @since 1.0, 2016.07.05
 */
class AlibabaOpenWholesaleGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.open.wholesale.get";
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
