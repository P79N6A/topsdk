<?php
/**
 * TOP API: alibaba.open.search.daixiao.recom.offer request
 * 
 * @author auto create
 * @since 1.0, 2016.07.19
 */
class AlibabaOpenSearchDaixiaoRecomOfferRequest
{
	/** 
	 * 查询参数
	 **/
	private $isvDaixiaoRecomRequest;
	
	private $apiParas = array();
	
	public function setIsvDaixiaoRecomRequest($isvDaixiaoRecomRequest)
	{
		$this->isvDaixiaoRecomRequest = $isvDaixiaoRecomRequest;
		$this->apiParas["isv_daixiao_recom_request"] = $isvDaixiaoRecomRequest;
	}

	public function getIsvDaixiaoRecomRequest()
	{
		return $this->isvDaixiaoRecomRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.search.daixiao.recom.offer";
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
