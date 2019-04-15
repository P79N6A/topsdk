<?php
/**
 * TOP API: taobao.daogoubao.order.statistics.total request
 * 
 * @author auto create
 * @since 1.0, 2016.07.14
 */
class DaogoubaoOrderStatisticsTotalRequest
{
	/** 
	 * 调试时用的传入id
	 **/
	private $debugId;
	
	/** 
	 * 需要的字段名
	 **/
	private $field;
	
	private $apiParas = array();
	
	public function setDebugId($debugId)
	{
		$this->debugId = $debugId;
		$this->apiParas["debug_id"] = $debugId;
	}

	public function getDebugId()
	{
		return $this->debugId;
	}

	public function setField($field)
	{
		$this->field = $field;
		$this->apiParas["field"] = $field;
	}

	public function getField()
	{
		return $this->field;
	}

	public function getApiMethodName()
	{
		return "taobao.daogoubao.order.statistics.total";
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
