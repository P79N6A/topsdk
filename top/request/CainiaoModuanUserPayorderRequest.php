<?php
/**
 * TOP API: cainiao.moduan.user.payorder request
 * 
 * @author auto create
 * @since 1.0, 2016.10.18
 */
class CainiaoModuanUserPayorderRequest
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
	 * 订单重量
	 **/
	private $weight;
	
	/** 
	 * 订单重货类型--LIGHT_GOODS(轻货),HEAVY_GOODS(重货),GREAT_HEAVY_GOODS(超重货)
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

	public function setWeight($weight)
	{
		$this->weight = $weight;
		$this->apiParas["weight"] = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
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
		return "cainiao.moduan.user.payorder";
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
		RequestCheckUtil::checkNotNull($this->weight,"weight");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
