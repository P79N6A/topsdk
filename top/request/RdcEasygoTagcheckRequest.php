<?php
/**
 * TOP API: taobao.rdc.easygo.tagcheck request
 * 
 * @author auto create
 * @since 1.0, 2015.09.23
 */
class RdcEasygoTagcheckRequest
{
	/** 
	 * 商家昵称
	 **/
	private $sellerNick;
	
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

	public function getApiMethodName()
	{
		return "taobao.rdc.easygo.tagcheck";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
