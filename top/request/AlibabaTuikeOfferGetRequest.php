<?php
/**
 * TOP API: alibaba.tuike.offer.get request
 * 
 * @author auto create
 * @since 1.0, 2016.08.15
 */
class AlibabaTuikeOfferGetRequest
{
	/** 
	 * 标识调用方
	 **/
	private $isvCode;
	
	/** 
	 * 搜索查询参数(json)
	 **/
	private $queryString;
	
	private $apiParas = array();
	
	public function setIsvCode($isvCode)
	{
		$this->isvCode = $isvCode;
		$this->apiParas["isv_code"] = $isvCode;
	}

	public function getIsvCode()
	{
		return $this->isvCode;
	}

	public function setQueryString($queryString)
	{
		$this->queryString = $queryString;
		$this->apiParas["query_string"] = $queryString;
	}

	public function getQueryString()
	{
		return $this->queryString;
	}

	public function getApiMethodName()
	{
		return "alibaba.tuike.offer.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isvCode,"isvCode");
		RequestCheckUtil::checkNotNull($this->queryString,"queryString");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
