<?php
/**
 * TOP API: taobao.rdc.easygo.getimtoken request
 * 
 * @author auto create
 * @since 1.0, 2015.11.03
 */
class RdcEasygoGetimtokenRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.rdc.easygo.getimtoken";
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
