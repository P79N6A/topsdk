<?php
/**
 * TOP API: cainiao.moduan.user.cansubmitorder request
 * 
 * @author auto create
 * @since 1.0, 2016.10.18
 */
class CainiaoModuanUserCansubmitorderRequest
{
	/** 
	 * 订单来源--GUOGUO(裹裹),ALIPAY(支付宝),TMALL(天猫),TAOBAO(淘宝),XIANYU(闲鱼),ROKID(rokid),WAREHOUSE(仓配),ZHONGAN(众安),GONGYI(公益寄件)
	 **/
	private $orderSource;
	
	/** 
	 * 收件人地址
	 **/
	private $receiverAddress;
	
	/** 
	 * 寄件人地址
	 **/
	private $senderAddress;
	
	/** 
	 * 订单重货类型-- LIGHT_GOODS(轻货),HEAVY_GOODS(重货),GREAT_HEAVY_GOODS(超重货)
	 **/
	private $weightType;
	
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

	public function setReceiverAddress($receiverAddress)
	{
		$this->receiverAddress = $receiverAddress;
		$this->apiParas["receiver_address"] = $receiverAddress;
	}

	public function getReceiverAddress()
	{
		return $this->receiverAddress;
	}

	public function setSenderAddress($senderAddress)
	{
		$this->senderAddress = $senderAddress;
		$this->apiParas["sender_address"] = $senderAddress;
	}

	public function getSenderAddress()
	{
		return $this->senderAddress;
	}

	public function setWeightType($weightType)
	{
		$this->weightType = $weightType;
		$this->apiParas["weight_type"] = $weightType;
	}

	public function getWeightType()
	{
		return $this->weightType;
	}

	public function getApiMethodName()
	{
		return "cainiao.moduan.user.cansubmitorder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderSource,"orderSource");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
