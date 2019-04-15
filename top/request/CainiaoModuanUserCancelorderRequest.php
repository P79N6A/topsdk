<?php
/**
 * TOP API: cainiao.moduan.user.cancelorder request
 * 
 * @author auto create
 * @since 1.0, 2016.10.18
 */
class CainiaoModuanUserCancelorderRequest
{
	/** 
	 * 订单来源--GUOGUO(裹裹),ALIPAY(支付宝),TMALL(天猫),TAOBAO(淘宝),XIANYU(闲鱼),ROKID(rokid),WAREHOUSE(仓配),ZHONGAN(众安),GONGYI(公益寄件)
	 **/
	private $orderSource;
	
	/** 
	 * 外部订单编号
	 **/
	private $outOrderId;
	
	/** 
	 * 外部用户编号
	 **/
	private $outUserId;
	
	/** 
	 * 取消原因编码
	 **/
	private $reasonCode;
	
	private $apiParas = array();
	
	public function setOrderSource($orderSource)
	{
		$this->orderSource = $orderSource;
		$this->apiParas["order_source"] = $orderSource;
	}

	public function getOrderSource()
	{
		return $this->orderSource;
	}

	public function setOutOrderId($outOrderId)
	{
		$this->outOrderId = $outOrderId;
		$this->apiParas["out_order_id"] = $outOrderId;
	}

	public function getOutOrderId()
	{
		return $this->outOrderId;
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

	public function setReasonCode($reasonCode)
	{
		$this->reasonCode = $reasonCode;
		$this->apiParas["reason_code"] = $reasonCode;
	}

	public function getReasonCode()
	{
		return $this->reasonCode;
	}

	public function getApiMethodName()
	{
		return "cainiao.moduan.user.cancelorder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderSource,"orderSource");
		RequestCheckUtil::checkNotNull($this->outOrderId,"outOrderId");
		RequestCheckUtil::checkNotNull($this->outUserId,"outUserId");
		RequestCheckUtil::checkNotNull($this->reasonCode,"reasonCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
