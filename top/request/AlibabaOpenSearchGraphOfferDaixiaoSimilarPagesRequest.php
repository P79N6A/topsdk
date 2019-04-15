<?php
/**
 * TOP API: alibaba.open.search.graph.offer.daixiao.similar.pages request
 * 
 * @author auto create
 * @since 1.0, 2016.08.16
 */
class AlibabaOpenSearchGraphOfferDaixiaoSimilarPagesRequest
{
	/** 
	 * 查询的页码，默认1
	 **/
	private $beginPage;
	
	/** 
	 * offer的id
	 **/
	private $offerId;
	
	/** 
	 * 每页的offer数量 ， 默认6
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setBeginPage($beginPage)
	{
		$this->beginPage = $beginPage;
		$this->apiParas["begin_page"] = $beginPage;
	}

	public function getBeginPage()
	{
		return $this->beginPage;
	}

	public function setOfferId($offerId)
	{
		$this->offerId = $offerId;
		$this->apiParas["offer_id"] = $offerId;
	}

	public function getOfferId()
	{
		return $this->offerId;
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
		return "alibaba.open.search.graph.offer.daixiao.similar.pages";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->offerId,"offerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
