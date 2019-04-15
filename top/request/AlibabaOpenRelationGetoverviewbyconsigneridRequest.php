<?php
/**
 * TOP API: alibaba.open.relation.getoverviewbyconsignerid request
 * 
 * @author auto create
 * @since 1.0, 2016.06.28
 */
class AlibabaOpenRelationGetoverviewbyconsigneridRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.open.relation.getoverviewbyconsignerid";
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
