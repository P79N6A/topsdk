<?php
/**
 * TOP API: alibaba.aliqin.fc.number.sendsms request
 * 
 * @author auto create
 * @since 1.0, 2015.11.04
 */
class AlibabaAliqinFcNumberSendsmsRequest
{
	/** 
	 * 示例:{"extend":"回传参数" "smsFreeSignName”:"短信签名" , "smsType": "normal", "smsParam": {"code":"测试,gl"} } 其中 extend为扩展信息作为回传参数的key,smsFreeSignName为短信签名的key, smsType为信息类型的key,smsType为normal表示短信,smsParam 为模板参数集合key,集合内的key是模板中的变量。若模板中无变量, smsParam可选。
	 **/
	private $params;
	
	/** 
	 * 合作伙伴code
	 **/
	private $partnerCode;
	
	/** 
	 * 接收号码
	 **/
	private $receiverNumber;
	
	/** 
	 * 信息模板code
	 **/
	private $smsCode;
	
	private $apiParas = array();
	
	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function setPartnerCode($partnerCode)
	{
		$this->partnerCode = $partnerCode;
		$this->apiParas["partner_code"] = $partnerCode;
	}

	public function getPartnerCode()
	{
		return $this->partnerCode;
	}

	public function setReceiverNumber($receiverNumber)
	{
		$this->receiverNumber = $receiverNumber;
		$this->apiParas["receiver_number"] = $receiverNumber;
	}

	public function getReceiverNumber()
	{
		return $this->receiverNumber;
	}

	public function setSmsCode($smsCode)
	{
		$this->smsCode = $smsCode;
		$this->apiParas["sms_code"] = $smsCode;
	}

	public function getSmsCode()
	{
		return $this->smsCode;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.fc.number.sendsms";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->partnerCode,"partnerCode");
		RequestCheckUtil::checkNotNull($this->receiverNumber,"receiverNumber");
		RequestCheckUtil::checkNotNull($this->smsCode,"smsCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
