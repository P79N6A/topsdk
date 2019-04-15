<?php
/**
 * TOP API: tmall.sla.scheme.supervision.get request
 * 
 * @author auto create
 * @since 1.0, 2015.05.18
 */
class TmallSlaSchemeSupervisionGetRequest
{
	/** 
	 * 获取返回结果说明
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
		return "tmall.sla.scheme.supervision.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
