<?php
/**
 * TOP API: taobao.rdc.easygo.changeacceptstatus request
 * 
 * @author auto create
 * @since 1.0, 2015.09.15
 */
class RdcEasygoChangeacceptstatusRequest
{
	/** 
	 * 商家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * 接单状态
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.easygo.changeacceptstatus";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
