<?php
/**
 * TOP API: taobao.ecloud.top.file.getjangocode request
 * 
 * @author auto create
 * @since 1.0, 2015.03.13
 */
class EcloudTopFileGetjangocodeRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.ecloud.top.file.getjangocode";
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
