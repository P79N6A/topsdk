<?php
/**
 * TOP API: taobao.pamirsathena.solution.add request
 * 
 * @author auto create
 * @since 1.0, 2015.10.21
 */
class PamirsathenaSolutionAddRequest
{
	/** 
	 * 发什么快递
	 **/
	private $questionDesc;
	
	/** 
	 * 1
	 **/
	private $questionTitle;
	
	/** 
	 * 亲,顺丰
	 **/
	private $solution;
	
	private $apiParas = array();
	
	public function setQuestionDesc($questionDesc)
	{
		$this->questionDesc = $questionDesc;
		$this->apiParas["question_desc"] = $questionDesc;
	}

	public function getQuestionDesc()
	{
		return $this->questionDesc;
	}

	public function setQuestionTitle($questionTitle)
	{
		$this->questionTitle = $questionTitle;
		$this->apiParas["question_title"] = $questionTitle;
	}

	public function getQuestionTitle()
	{
		return $this->questionTitle;
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
		return "taobao.pamirsathena.solution.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->questionDesc,"questionDesc");
		RequestCheckUtil::checkNotNull($this->questionTitle,"questionTitle");
		RequestCheckUtil::checkNotNull($this->solution,"solution");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
