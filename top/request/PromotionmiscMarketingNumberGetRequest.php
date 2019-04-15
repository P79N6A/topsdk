<?php
/**
 * TOP API: taobao.promotionmisc.marketing.number.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.13
 */
class PromotionmiscMarketingNumberGetRequest
{
	/** 
	 * 需返还的字段
	 **/
	private $fields;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getApiMethodName()
	{
		return "taobao.promotionmisc.marketing.number.get";
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
