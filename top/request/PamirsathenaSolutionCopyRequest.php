<?php
/**
 * TOP API: taobao.pamirsathena.solution.copy request
 * 
 * @author auto create
 * @since 1.0, 2015.08.24
 */
class PamirsathenaSolutionCopyRequest
{
	/** 
	 * 要拷贝数字的用户
	 **/
	private $otherUserId;
	
	private $apiParas = array();
	
	public function setOtherUserId($otherUserId)
	{
		$this->otherUserId = $otherUserId;
		$this->apiParas["other_user_id"] = $otherUserId;
	}

	public function getOtherUserId()
	{
		return $this->otherUserId;
	}

	public function getApiMethodName()
	{
		return "taobao.pamirsathena.solution.copy";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->otherUserId,"otherUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
