<?php
/**
 * TOP API: alibaba.tuike.offer.get.pro request
 * 
 * @author auto create
 * @since 1.0, 2017.05.05
 */
class AlibabaTuikeOfferGetProRequest
{
	/** 
	 * 标识调用方
	 **/
	private $isvCode;
	
	/** 
	 * 用户ID
	 **/
	private $loginId;
	
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

	public function setLoginId($loginId)
	{
		$this->loginId = $loginId;
		$this->apiParas["login_id"] = $loginId;
	}

	public function getLoginId()
	{
		return $this->loginId;
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
		return "alibaba.tuike.offer.get.pro";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isvCode,"isvCode");
		RequestCheckUtil::checkNotNull($this->loginId,"loginId");
		RequestCheckUtil::checkNotNull($this->queryString,"queryString");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
