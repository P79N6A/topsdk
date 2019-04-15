<?php
/**
 * TOP API: alibaba.open.industry.showwindow.doqueryrecommofferlist request
 * 
 * @author auto create
 * @since 1.0, 2016.11.29
 */
class AlibabaOpenIndustryShowwindowDoqueryrecommofferlistRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.open.industry.showwindow.doqueryrecommofferlist";
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
