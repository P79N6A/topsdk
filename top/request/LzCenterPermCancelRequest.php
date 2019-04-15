<?php
/**
 * TOP API: taobao.lz.center.perm.cancel request
 * 
 * @author auto create
 * @since 1.0, 2015.08.24
 */
class LzCenterPermCancelRequest
{
	/** 
	 * app_engine
	 **/
	private $appEngine;
	
	/** 
	 * privilege_code
	 **/
	private $privilegeCode;
	
	/** 
	 * 订购应用的用户ID
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setAppEngine($appEngine)
	{
		$this->appEngine = $appEngine;
		$this->apiParas["app_engine"] = $appEngine;
	}

	public function getAppEngine()
	{
		return $this->appEngine;
	}

	public function setPrivilegeCode($privilegeCode)
	{
		$this->privilegeCode = $privilegeCode;
		$this->apiParas["privilege_code"] = $privilegeCode;
	}

	public function getPrivilegeCode()
	{
		return $this->privilegeCode;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "taobao.lz.center.perm.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appEngine,"appEngine");
		RequestCheckUtil::checkNotNull($this->privilegeCode,"privilegeCode");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
