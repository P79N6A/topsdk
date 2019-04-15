<?php
/**
 * TOP API: taobao.pamirsathena.solution.modify request
 * 
 * @author auto create
 * @since 1.0, 2015.10.21
 */
class PamirsathenaSolutionModifyRequest
{
	/** 
	 * 数字知识id
	 **/
	private $knowledgeId;
	
	/** 
	 * 问题描述
	 **/
	private $questionDesc;
	
	/** 
	 * 问题答案
	 **/
	private $solution;
	
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

	public function setQuestionDesc($questionDesc)
	{
		$this->questionDesc = $questionDesc;
		$this->apiParas["question_desc"] = $questionDesc;
	}

	public function getQuestionDesc()
	{
		return $this->questionDesc;
	}

	public function setSolution($solution)
	{
		$this->solution = $solution;
		$this->apiParas["solution"] = $solution;
	}

	public function getSolution()
	{
		return $this->solution;
	}

	public function getApiMethodName()
	{
		return "taobao.pamirsathena.solution.modify";
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
