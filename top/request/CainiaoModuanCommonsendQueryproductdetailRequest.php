<?php
/**
 * TOP API: cainiao.moduan.commonsend.queryproductdetail request
 * 
 * @author auto create
 * @since 1.0, 2017.05.08
 */
class CainiaoModuanCommonsendQueryproductdetailRequest
{
	/** 
	 * 能力产品详情入参
	 **/
	private $detailReq;
	
	/** 
	 * 收件地址
	 **/
	private $receiverAddress;
	
	/** 
	 * 寄件地址
	 **/
	private $senderAddress;
	
	private $apiParas = array();
	
	public function setDetailReq($detailReq)
	{
		$this->detailReq = $detailReq;
		$this->apiParas["detail_req"] = $detailReq;
	}

	public function getDetailReq()
	{
		return $this->detailReq;
	}

	public function setReceiverAddress($receiverAddress)
	{
		$this->receiverAddress = $receiverAddress;
		$this->apiParas["receiver_address"] = $receiverAddress;
	}

	public function getReceiverAddress()
	{
		return $this->receiverAddress;
	}

	public function setSenderAddress($senderAddress)
	{
		$this->senderAddress = $senderAddress;
		$this->apiParas["sender_address"] = $senderAddress;
	}

	public function getSenderAddress()
	{
		return $this->senderAddress;
	}

	public function getApiMethodName()
	{
		return "cainiao.moduan.commonsend.queryproductdetail";
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
