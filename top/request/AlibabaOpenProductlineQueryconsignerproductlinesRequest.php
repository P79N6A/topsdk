<?php
/**
 * TOP API: alibaba.open.productline.queryconsignerproductlines request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenProductlineQueryconsignerproductlinesRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.open.productline.queryconsignerproductlines";
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
