<?php
/**
 * TOP API: taobao.rdc.easygo.agreementassign request
 * 
 * @author auto create
 * @since 1.0, 2015.09.15
 */
class RdcEasygoAgreementassignRequest
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
		return "taobao.rdc.easygo.agreementassign";
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
