<?php
/**
 * TOP API: alibaba.open.search.guess.offer.daixiao.version.two request
 * 
 * @author auto create
 * @since 1.0, 2016.08.16
 */
class AlibabaOpenSearchGuessOfferDaixiaoVersionTwoRequest
{
	/** 
	 * 用户memberID
	 **/
	private $companyMemberId;
	
	/** 
	 * offer个数,默认60 ， 最大100
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCompanyMemberId($companyMemberId)
	{
		$this->companyMemberId = $companyMemberId;
		$this->apiParas["company_member_id"] = $companyMemberId;
	}

	public function getCompanyMemberId()
	{
		return $this->companyMemberId;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.search.guess.offer.daixiao.version.two";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyMemberId,"companyMemberId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
