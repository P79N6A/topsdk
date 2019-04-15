<?php
/**
 * TOP API: taobao.pamirsathena.solution.getbyrelation request
 * 
 * @author auto create
 * @since 1.0, 2015.10.21
 */
class PamirsathenaSolutionGetbyrelationRequest
{
	/** 
	 * 数字知识列表
	 **/
	private $knowledgeIds;
	
	/** 
	 * 知识答案是否需要富文本
	 **/
	private $source;
	
	private $apiParas = array();
	
	public function setKnowledgeIds($knowledgeIds)
	{
		$this->knowledgeIds = $knowledgeIds;
		$this->apiParas["knowledge_ids"] = $knowledgeIds;
	}

	public function getKnowledgeIds()
	{
		return $this->knowledgeIds;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function getApiMethodName()
	{
		return "taobao.pamirsathena.solution.getbyrelation";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->knowledgeIds,"knowledgeIds");
		RequestCheckUtil::checkMaxListSize($this->knowledgeIds,20,"knowledgeIds");
		RequestCheckUtil::checkNotNull($this->source,"source");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
