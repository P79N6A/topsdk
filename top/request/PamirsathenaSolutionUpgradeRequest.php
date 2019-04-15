<?php
/**
 * TOP API: taobao.pamirsathena.solution.upgrade request
 * 
 * @author auto create
 * @since 1.0, 2015.04.23
 */
class PamirsathenaSolutionUpgradeRequest
{
	/** 
	 * 升级至云端
	 **/
	private $registerStatus;
	
	private $apiParas = array();
	
	public function setRegisterStatus($registerStatus)
	{
		$this->registerStatus = $registerStatus;
		$this->apiParas["register_status"] = $registerStatus;
	}

	public function getRegisterStatus()
	{
		return $this->registerStatus;
	}

	public function getApiMethodName()
	{
		return "taobao.pamirsathena.solution.upgrade";
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
