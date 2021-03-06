<?php
/**
 * TOP API: taobao.ewuliu.freight.sendgoodsaddresslist.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class EwuliuFreightSendgoodsaddresslistGetRequest
{
	/** 
	 * 是否只取常用发货地址
	 **/
	private $commonUseOnly;
	
	/** 
	 * 自定义返回字段，字段为deliveryAddressId,updateTime,isCommonUse,contactName,location,address,postcode,telephone,mobilephone（目前不支持选择部分字段，必须输入全部字段）。多个字段以半角','分隔。若此字段为空，则返回数组信息为空
	 **/
	private $returnFields;
	
	private $apiParas = array();
	
	public function setCommonUseOnly($commonUseOnly)
	{
		$this->commonUseOnly = $commonUseOnly;
		$this->apiParas["common_use_only"] = $commonUseOnly;
	}

	public function getCommonUseOnly()
	{
		return $this->commonUseOnly;
	}

	public function setReturnFields($returnFields)
	{
		$this->returnFields = $returnFields;
		$this->apiParas["return_fields"] = $returnFields;
	}

	public function getReturnFields()
	{
		return $this->returnFields;
	}

	public function getApiMethodName()
	{
		return "taobao.ewuliu.freight.sendgoodsaddresslist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->commonUseOnly,"commonUseOnly");
		RequestCheckUtil::checkNotNull($this->returnFields,"returnFields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
