<?php
/**
 * TOP API: taobao.qianniu.shopfeed.draft.get request
 * 
 * @author auto create
 * @since 1.0, 2015.05.13
 */
class QianniuShopfeedDraftGetRequest
{
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 本地最后一条店铺动态的时间
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.shopfeed.draft.get";
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
