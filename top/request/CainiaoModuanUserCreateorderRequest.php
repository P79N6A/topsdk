<?php
/**
 * TOP API: cainiao.moduan.user.createorder request
 * 
 * @author auto create
 * @since 1.0, 2016.10.18
 */
class CainiaoModuanUserCreateorderRequest
{
	/** 
	 * {}
	 **/
	private $orderRequest;
	
	/** 
	 * 外部用户id
	 **/
	private $outUserId;
	
	private $apiParas = array();
	
	public function setOrderRequest($orderRequest)
	{
		$this->orderRequest = $orderRequest;
		$this->apiParas["order_request"] = $orderRequest;
	}

	public function getOrderRequest()
	{
		return $this->orderRequest;
	}

	public function setOutUserId($outUserId)
	{
		$this->outUserId = $outUserId;
		$this->apiParas["out_user_id"] = $outUserId;
	}

	public function getOutUserId()
	{
		return $this->outUserId;
	}

	public function getApiMethodName()
	{
		return "cainiao.moduan.user.createorder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outUserId,"outUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
