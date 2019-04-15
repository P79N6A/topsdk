<?php
/**
 * TOP API: alibaba.qixinbao.productlinks.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class AlibabaQixinbaoProductlinksGetRequest
{
	/** 
	 * 企信宝实例id
	 **/
	private $qxbId;
	
	private $apiParas = array();
	
	public function setQxbId($qxbId)
	{
		$this->qxbId = $qxbId;
		$this->apiParas["qxb_id"] = $qxbId;
	}

	public function getQxbId()
	{
		return $this->qxbId;
	}

	public function getApiMethodName()
	{
		return "alibaba.qixinbao.productlinks.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->qxbId,"qxbId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
