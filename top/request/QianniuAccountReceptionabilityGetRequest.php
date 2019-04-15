<?php
/**
 * TOP API: taobao.qianniu.account.receptionability.get request
 * 
 * @author auto create
 * @since 1.0, 2015.11.04
 */
class QianniuAccountReceptionabilityGetRequest
{
	/** 
	 * 账号id
	 **/
	private $accountIds;
	
	/** 
	 * 主账号id
	 **/
	private $mainAcountId;
	
	private $apiParas = array();
	
	public function setAccountIds($accountIds)
	{
		$this->accountIds = $accountIds;
		$this->apiParas["account_ids"] = $accountIds;
	}

	public function getAccountIds()
	{
		return $this->accountIds;
	}

	public function setMainAcountId($mainAcountId)
	{
		$this->mainAcountId = $mainAcountId;
		$this->apiParas["main_acount_id"] = $mainAcountId;
	}

	public function getMainAcountId()
	{
		return $this->mainAcountId;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.account.receptionability.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accountIds,"accountIds");
		RequestCheckUtil::checkMaxListSize($this->accountIds,100,"accountIds");
		RequestCheckUtil::checkNotNull($this->mainAcountId,"mainAcountId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
