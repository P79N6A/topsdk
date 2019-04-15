<?php
/**
 * TOP API: taobao.qianniu.task.comments.get request
 * 
 * @author auto create
 * @since 1.0, 2016.03.02
 */
class QianniuTaskCommentsGetRequest
{
	/** 
	 * 当前页数，从1开始
	 **/
	private $currentPage;
	
	/** 
	 * 任务元id。获取的是整个任务元的评论。当taskId为空时有效。
	 **/
	private $metaId;
	
	/** 
	 * 排序字段，可以为id,gmt_create
	 **/
	private $orderBy;
	
	/** 
	 * asc为升，desc为降
	 **/
	private $orderType;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	/** 
	 * 任务id
	 **/
	private $taskId;
	
	/** 
	 * 评论人userid。当前仅限自己的userId。为空时返回task下的所有评论。
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setMetaId($metaId)
	{
		$this->metaId = $metaId;
		$this->apiParas["meta_id"] = $metaId;
	}

	public function getMetaId()
	{
		return $this->metaId;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
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

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.task.comments.get";
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
