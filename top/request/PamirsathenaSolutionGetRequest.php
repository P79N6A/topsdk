<?php
/**
 * TOP API: taobao.pamirsathena.solution.get request
 * 
 * @author auto create
 * @since 1.0, 2015.10.21
 */
class PamirsathenaSolutionGetRequest
{
	/** 
	 * 数字知识id集合
	 **/
	private $knowledgeids;
	
	/** 
	 * api来源
	 **/
	private $source;
	
	private $apiParas = array();
	
	public function setKnowledgeids($knowledgeids)
	{
		$this->knowledgeids = $knowledgeids;
		$this->apiParas["knowledgeids"] = $knowledgeids;
	}

	public function getKnowledgeids()
	{
		return $this->knowledgeids;
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
		return "taobao.pamirsathena.solution.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->knowledgeids,"knowledgeids");
		RequestCheckUtil::checkMaxListSize($this->knowledgeids,20,"knowledgeids");
		RequestCheckUtil::checkNotNull($this->source,"source");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
