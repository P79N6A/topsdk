<?php
/**
 * TOP API: taobao.incbook.enterprise.assets.get request
 * 
 * @author auto create
 * @since 1.0, 2016.02.23
 */
class IncbookEnterpriseAssetsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.incbook.enterprise.assets.get";
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
