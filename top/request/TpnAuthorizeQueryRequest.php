<?php
/**
 * TOP API: taobao.tpn.authorize.query request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class TpnAuthorizeQueryRequest
{
	/** 
	 * 传递客户端的信息
	 **/
	private $clientInfo;
	
	/** 
	 * 用户子账号userId，如果是主账号，则为0
	 **/
	private $subUserId;
	
	/** 
	 * 账号的名称，如trade、item、qianniu等
多个账号以逗号分割
	 **/
	private $topics;
	
	/** 
	 * 用户主账号userId
	 **/
	private $userId;
	
	/** 
	 * 客户端使用的版本号
	 **/
	private $version;
	
	private $apiParas = array();
	
	public function setClientInfo($clientInfo)
	{
		$this->clientInfo = $clientInfo;
		$this->apiParas["client_info"] = $clientInfo;
	}

	public function getClientInfo()
	{
		return $this->clientInfo;
	}

	public function setSubUserId($subUserId)
	{
		$this->subUserId = $subUserId;
		$this->apiParas["sub_user_id"] = $subUserId;
	}

	public function getSubUserId()
	{
		return $this->subUserId;
	}

	public function setTopics($topics)
	{
		$this->topics = $topics;
		$this->apiParas["topics"] = $topics;
	}

	public function getTopics()
	{
		return $this->topics;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function setVersion($version)
	{
		$this->version = $version;
		$this->apiParas["version"] = $version;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getApiMethodName()
	{
		return "taobao.tpn.authorize.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->subUserId,"subUserId");
		RequestCheckUtil::checkNotNull($this->topics,"topics");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
