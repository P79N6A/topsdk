<?php
/**
 * TOP API: alibaba.open.offergroup.hasopened request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenOffergroupHasopenedRequest
{
	/** 
	 * 用户ID
	 **/
	private $memberId;
	
	private $apiParas = array();
	
	public function setMemberId($memberId)
	{
		$this->memberId = $memberId;
		$this->apiParas["member_id"] = $memberId;
	}

	public function getMemberId()
	{
		return $this->memberId;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.offergroup.hasopened";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->memberId,"memberId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
