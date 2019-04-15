<?php
/**
 * TOP API: alibaba.interact.sensor.blow request
 * 
 * @author auto create
 * @since 1.0, 2014.09.15
 */
class AlibabaInteractSensorBlowRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.blow";
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