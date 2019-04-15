<?php
/**
 * TOP API: taobao.koubei.takeout.order.accept request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class KoubeiTakeoutOrderAcceptRequest
{
	/** 
	 * 认证键值
	 **/
	private $key;
	
	/** 
	 * 指定的订单ID
	 **/
	private $orderId;
	
	/** 
	 * 所属用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setKey($key)
	{
		$this->key = $key;
		$this->apiParas["key"] = $key;
	}

	public function getKey()
	{
		return $this->key;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
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

	public function getApiMethodName()
	{
		return "taobao.koubei.takeout.order.accept";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->key,"key");
		RequestCheckUtil::checkMaxLength($this->key,50,"key");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkMaxLength($this->orderId,40,"orderId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
		RequestCheckUtil::checkMaxLength($this->userId,30,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
