<?php
/**
 * TOP API: cainiao.moduan.commonsend.issupportproduct request
 * 
 * @author auto create
 * @since 1.0, 2017.05.08
 */
class CainiaoModuanCommonsendIssupportproductRequest
{
	/** 
	 * 收件人地址
	 **/
	private $receiverAddress;
	
	/** 
	 * 寄件人地址
	 **/
	private $senderAddress;
	
	/** 
	 * 是否支持入参
	 **/
	private $supportReq;
	
	private $apiParas = array();
	
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

	public function setSupportReq($supportReq)
	{
		$this->supportReq = $supportReq;
		$this->apiParas["support_req"] = $supportReq;
	}

	public function getSupportReq()
	{
		return $this->supportReq;
	}

	public function getApiMethodName()
	{
		return "cainiao.moduan.commonsend.issupportproduct";
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
