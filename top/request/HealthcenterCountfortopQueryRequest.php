<?php
/**
 * TOP API: taobao.healthcenter.countfortop.query request
 * 
 * @author auto create
 * @since 1.0, 2016.07.07
 */
class HealthcenterCountfortopQueryRequest
{
	/** 
	 * pending_count:待处理违规,history_punish_count:历史违规,pending_market_manager_count:待处理管控,history_market_manager_count:历史管控。 fields支持多个字段, 多个字段用英文逗号(,)隔开
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
		return "taobao.healthcenter.countfortop.query";
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
