<?php
/**
 * TOP API: alibaba.open.relation.endconsignrelationbysupplierid request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenRelationEndconsignrelationbysupplieridRequest
{
	/** 
	 * 分销商LoginId
	 **/
	private $consignerLoginId;
	
	/** 
	 * 终止关系原因
	 **/
	private $reason;
	
	private $apiParas = array();
	
	public function setConsignerLoginId($consignerLoginId)
	{
		$this->consignerLoginId = $consignerLoginId;
		$this->apiParas["consigner_login_id"] = $consignerLoginId;
	}

	public function getConsignerLoginId()
	{
		return $this->consignerLoginId;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.relation.endconsignrelationbysupplierid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->consignerLoginId,"consignerLoginId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
