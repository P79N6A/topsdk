<?php
/**
 * TOP API: cainiao.moduan.commonsend.createorder request
 * 
 * @author auto create
 * @since 1.0, 2017.05.08
 */
class CainiaoModuanCommonsendCreateorderRequest
{
	/** 
	 * 渠道参数
	 **/
	private $createChannelParam;
	
	/** 
	 * 创建参数
	 **/
	private $createOrderParam;
	
	/** 
	 * 收件人
	 **/
	private $receiver;
	
	/** 
	 * 寄件人
	 **/
	private $sender;
	
	private $apiParas = array();
	
	public function setCreateChannelParam($createChannelParam)
	{
		$this->createChannelParam = $createChannelParam;
		$this->apiParas["create_channel_param"] = $createChannelParam;
	}

	public function getCreateChannelParam()
	{
		return $this->createChannelParam;
	}

	public function setCreateOrderParam($createOrderParam)
	{
		$this->createOrderParam = $createOrderParam;
		$this->apiParas["create_order_param"] = $createOrderParam;
	}

	public function getCreateOrderParam()
	{
		return $this->createOrderParam;
	}

	public function setReceiver($receiver)
	{
		$this->receiver = $receiver;
		$this->apiParas["receiver"] = $receiver;
	}

	public function getReceiver()
	{
		return $this->receiver;
	}

	public function setSender($sender)
	{
		$this->sender = $sender;
		$this->apiParas["sender"] = $sender;
	}

	public function getSender()
	{
		return $this->sender;
	}

	public function getApiMethodName()
	{
		return "cainiao.moduan.commonsend.createorder";
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
