<?php
/**
 * TOP API: taobao.rdc.easygo.mobile.changeacceptstatus request
 * 
 * @author auto create
 * @since 1.0, 2015.11.03
 */
class RdcEasygoMobileChangeacceptstatusRequest
{
	/** 
	 * 抢单状态
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.easygo.mobile.changeacceptstatus";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
