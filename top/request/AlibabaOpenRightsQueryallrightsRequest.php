<?php
/**
 * TOP API: alibaba.open.rights.queryallrights request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenRightsQueryallrightsRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.open.rights.queryallrights";
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
