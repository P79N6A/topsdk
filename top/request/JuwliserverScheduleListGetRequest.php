<?php
/**
 * TOP API: taobao.juwliserver.schedule.list.get request
 * 
 * @author auto create
 * @since 1.0, 2012-10-31 00:00:00
 */
class JuwliserverScheduleListGetRequest
{
	/** 
	 * 单页显示条数
	 **/
	private $pageSize;
	
	/** 
	 * 列表页起始行
	 **/
	private $startRow;
	
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

	public function setStartRow($startRow)
	{
		$this->startRow = $startRow;
		$this->apiParas["start_row"] = $startRow;
	}

	public function getStartRow()
	{
		return $this->startRow;
	}

	public function getApiMethodName()
	{
		return "taobao.juwliserver.schedule.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->startRow,"startRow");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
