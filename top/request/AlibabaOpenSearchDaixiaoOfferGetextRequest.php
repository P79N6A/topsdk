<?php
/**
 * TOP API: alibaba.open.search.daixiao.offer.getext request
 * 
 * @author auto create
 * @since 1.0, 2016.06.28
 */
class AlibabaOpenSearchDaixiaoOfferGetextRequest
{
	/** 
	 * 搜索参数
	 **/
	private $isvDaixiaoOfferRequest;
	
	private $apiParas = array();
	
	public function setIsvDaixiaoOfferRequest($isvDaixiaoOfferRequest)
	{
		$this->isvDaixiaoOfferRequest = $isvDaixiaoOfferRequest;
		$this->apiParas["isv_daixiao_offer_request"] = $isvDaixiaoOfferRequest;
	}

	public function getIsvDaixiaoOfferRequest()
	{
		return $this->isvDaixiaoOfferRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.search.daixiao.offer.getext";
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
