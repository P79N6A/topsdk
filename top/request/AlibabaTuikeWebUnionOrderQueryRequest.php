<?php
/**
 * TOP API: alibaba.tuike.web.union.order.query request
 * 
 * @author auto create
 * @since 1.0, 2017.03.29
 */
class AlibabaTuikeWebUnionOrderQueryRequest
{
	/** 
	 * 13位时间戳
	 **/
	private $endTime;
	
	/** 
	 * 页码偏移
	 **/
	private $pageOffset;
	
	/** 
	 * 返回条数
	 **/
	private $pageSize;
	
	/** 
	 * 13位时间戳
	 **/
	private $startTime;
	
	/** 
	 * 0 表示time为下单时间;1表示time为更新时间
	 **/
	private $timeType;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setPageOffset($pageOffset)
	{
		$this->pageOffset = $pageOffset;
		$this->apiParas["page_offset"] = $pageOffset;
	}

	public function getPageOffset()
	{
		return $this->pageOffset;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTimeType($timeType)
	{
		$this->timeType = $timeType;
		$this->apiParas["time_type"] = $timeType;
	}

	public function getTimeType()
	{
		return $this->timeType;
	}

	public function getApiMethodName()
	{
		return "alibaba.tuike.web.union.order.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->pageOffset,"pageOffset");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->timeType,"timeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
