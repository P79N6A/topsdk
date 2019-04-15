<?php
/**
 * TOP API: taobao.rdc.easygo.gethistoryoder request
 * 
 * @author auto create
 * @since 1.0, 2016.06.13
 */
class RdcEasygoGethistoryoderRequest
{
	/** 
	 * 需要展示的状态码
	 **/
	private $filter;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页数量
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setFilter($filter)
	{
		$this->filter = $filter;
		$this->apiParas["filter"] = $filter;
	}

	public function getFilter()
	{
		return $this->filter;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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
		return "taobao.rdc.easygo.gethistoryoder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
