<?php
/**
 * TOP API: taobao.tis.add request
 * 
 * @author auto create
 * @since 1.0, 2015.08.24
 */
class TisAddRequest
{
	/** 
	 * 文档json串
	 **/
	private $requestStr;
	
	/** 
	 * 索引名称
	 **/
	private $serviceName;
	
	private $apiParas = array();
	
	public function setRequestStr($requestStr)
	{
		$this->requestStr = $requestStr;
		$this->apiParas["request_str"] = $requestStr;
	}

	public function getRequestStr()
	{
		return $this->requestStr;
	}

	public function setServiceName($serviceName)
	{
		$this->serviceName = $serviceName;
		$this->apiParas["service_name"] = $serviceName;
	}

	public function getServiceName()
	{
		return $this->serviceName;
	}

	public function getApiMethodName()
	{
		return "taobao.tis.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->requestStr,"requestStr");
		RequestCheckUtil::checkNotNull($this->serviceName,"serviceName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
