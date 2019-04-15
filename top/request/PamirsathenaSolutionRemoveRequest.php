<?php
/**
 * TOP API: taobao.pamirsathena.solution.remove request
 * 
 * @author auto create
 * @since 1.0, 2015.10.21
 */
class PamirsathenaSolutionRemoveRequest
{
	/** 
	 * 数字知识id
	 **/
	private $knowledgeId;
	
	private $apiParas = array();
	
	public function setKnowledgeId($knowledgeId)
	{
		$this->knowledgeId = $knowledgeId;
		$this->apiParas["knowledge_id"] = $knowledgeId;
	}

	public function getKnowledgeId()
	{
		return $this->knowledgeId;
	}

	public function getApiMethodName()
	{
		return "taobao.pamirsathena.solution.remove";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->knowledgeId,"knowledgeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
