<?php
/**
 * TOP API: taobao.rdc.easygo.saveserviceconfig request
 * 
 * @author auto create
 * @since 1.0, 2015.09.16
 */
class RdcEasygoSaveserviceconfigRequest
{
	/** 
	 * 商家配置的服务项
	 **/
	private $configList;
	
	/** 
	 * 商家昵称
	 **/
	private $sellerNick;
	
	private $apiParas = array();
	
	public function setConfigList($configList)
	{
		$this->configList = $configList;
		$this->apiParas["configList"] = $configList;
	}

	public function getConfigList()
	{
		return $this->configList;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["sellerNick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.easygo.saveserviceconfig";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
