<?php
/**
 * TOP API: taobao.qianniu.tasklist.count request
 * 
 * @author auto create
 * @since 1.0, 2016.03.01
 */
class QianniuTasklistCountRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.qianniu.tasklist.count";
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
