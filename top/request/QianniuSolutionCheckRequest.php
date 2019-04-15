<?php
/**
 * TOP API: taobao.qianniu.solution.check request
 * 
 * @author auto create
 * @since 1.0, 2016.06.14
 */
class QianniuSolutionCheckRequest
{
	/** 
	 * 来源
	 **/
	private $from;
	
	/** 
	 * 类型
	 **/
	private $ref;
	
	/** 
	 * 解决方案
	 **/
	private $solutionContent;
	
	private $apiParas = array();
	
	public function setFrom($from)
	{
		$this->from = $from;
		$this->apiParas["from"] = $from;
	}

	public function getFrom()
	{
		return $this->from;
	}

	public function setRef($ref)
	{
		$this->ref = $ref;
		$this->apiParas["ref"] = $ref;
	}

	public function getRef()
	{
		return $this->ref;
	}

	public function setSolutionContent($solutionContent)
	{
		$this->solutionContent = $solutionContent;
		$this->apiParas["solution_content"] = $solutionContent;
	}

	public function getSolutionContent()
	{
		return $this->solutionContent;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.solution.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->from,"from");
		RequestCheckUtil::checkNotNull($this->ref,"ref");
		RequestCheckUtil::checkNotNull($this->solutionContent,"solutionContent");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
