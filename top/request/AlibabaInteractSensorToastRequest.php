<?php
/**
 * TOP API: alibaba.interact.sensor.toast request
 * 
 * @author auto create
 * @since 1.0, 2014.09.23
 */
class AlibabaInteractSensorToastRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.toast";
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
