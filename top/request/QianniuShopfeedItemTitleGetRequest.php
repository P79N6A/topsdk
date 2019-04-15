<?php
/**
 * TOP API: taobao.qianniu.shopfeed.item.title.get request
 * 
 * @author auto create
 * @since 1.0, 2015.05.13
 */
class QianniuShopfeedItemTitleGetRequest
{
	/** 
	 * 用户输入的url
	 **/
	private $url;
	
	private $apiParas = array();
	
	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.shopfeed.item.title.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->url,"url");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
