<?php
/**
 * TOP API: taobao.tj.shop.punishdetail.get request
 * 
 * @author auto create
 * @since 1.0, 2015.05.26
 */
class TjShopPunishdetailGetRequest
{
	/** 
	 * 店铺的记录ID
	 **/
	private $processId;
	
	private $apiParas = array();
	
	public function setProcessId($processId)
	{
		$this->processId = $processId;
		$this->apiParas["process_id"] = $processId;
	}

	public function getProcessId()
	{
		return $this->processId;
	}

	public function getApiMethodName()
	{
		return "taobao.tj.shop.punishdetail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->processId,"processId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
