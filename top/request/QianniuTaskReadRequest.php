<?php
/**
 * TOP API: taobao.qianniu.task.read request
 * 
 * @author auto create
 * @since 1.0, 2016.02.28
 */
class QianniuTaskReadRequest
{
	/** 
	 * 任务ID的列表，以","进行分隔。例如：73596,73599,73602
	 **/
	private $taskIds;
	
	private $apiParas = array();
	
	public function setTaskIds($taskIds)
	{
		$this->taskIds = $taskIds;
		$this->apiParas["task_ids"] = $taskIds;
	}

	public function getTaskIds()
	{
		return $this->taskIds;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.task.read";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->taskIds,"taskIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
