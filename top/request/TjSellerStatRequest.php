<?php
/**
 * TOP API: taobao.tj.seller.stat request
 * 
 * @author auto create
 * @since 1.0, 2015.05.26
 */
class TjSellerStatRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.tj.seller.stat";
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
