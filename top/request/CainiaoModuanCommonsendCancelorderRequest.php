<?php
/**
 * TOP API: cainiao.moduan.commonsend.cancelorder request
 * 
 * @author auto create
 * @since 1.0, 2017.05.08
 */
class CainiaoModuanCommonsendCancelorderRequest
{
	/** 
	 * 外部用户ID
	 **/
	private $outUserId;
	
	/** 
	 * 取消原因编号
	 **/
	private $reasonCode;
	
	/** 
	 * 订单ID
	 **/
	private $tdOrderId;
	
	private $apiParas = array();
	
	public function setOutUserId($outUserId)
	{
		$this->outUserId = $outUserId;
		$this->apiParas["out_user_id"] = $outUserId;
	}

	public function getOutUserId()
	{
		return $this->outUserId;
	}

	public function setReasonCode($reasonCode)
	{
		$this->reasonCode = $reasonCode;
		$this->apiParas["reason_code"] = $reasonCode;
	}

	public function getReasonCode()
	{
		return $this->reasonCode;
	}

	public function setTdOrderId($tdOrderId)
	{
		$this->tdOrderId = $tdOrderId;
		$this->apiParas["td_order_id"] = $tdOrderId;
	}

	public function getTdOrderId()
	{
		return $this->tdOrderId;
	}

	public function getApiMethodName()
	{
		return "cainiao.moduan.commonsend.cancelorder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outUserId,"outUserId");
		RequestCheckUtil::checkNotNull($this->reasonCode,"reasonCode");
		RequestCheckUtil::checkNotNull($this->tdOrderId,"tdOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
