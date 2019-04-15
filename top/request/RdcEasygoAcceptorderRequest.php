<?php
/**
 * TOP API: taobao.rdc.easygo.acceptorder request
 * 
 * @author auto create
 * @since 1.0, 2015.09.14
 */
class RdcEasygoAcceptorderRequest
{
	/** 
	 * 宝贝id
	 **/
	private $auctionId;
	
	/** 
	 * 派单id
	 **/
	private $dispatchId;
	
	private $apiParas = array();
	
	public function setAuctionId($auctionId)
	{
		$this->auctionId = $auctionId;
		$this->apiParas["auction_id"] = $auctionId;
	}

	public function getAuctionId()
	{
		return $this->auctionId;
	}

	public function setDispatchId($dispatchId)
	{
		$this->dispatchId = $dispatchId;
		$this->apiParas["dispatch_id"] = $dispatchId;
	}

	public function getDispatchId()
	{
		return $this->dispatchId;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.easygo.acceptorder";
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
