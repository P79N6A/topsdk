<?php
/**
 * TOP API: taobao.jushita.jms.user.add request
 * 
 * @author auto create
 * @since 1.0, 2015.08.24
 */
class JushitaJmsUserAddRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.jushita.jms.user.add";
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
