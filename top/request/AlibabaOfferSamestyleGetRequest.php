<?php
/**
 * TOP API: alibaba.offer.samestyle.get request
 * 
 * @author auto create
 * @since 1.0, 2017.05.11
 */
class AlibabaOfferSamestyleGetRequest
{
	/** 
	 * 淘宝商品Id
	 **/
	private $offerItemId;
	
	/** 
	 * 当前查询页
	 **/
	private $pageNo;
	
	/** 
	 * 每页几条
	 **/
	private $pageSize;
	
	/** 
	 * 0代表代销关系，1代表同款
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setOfferItemId($offerItemId)
	{
		$this->offerItemId = $offerItemId;
		$this->apiParas["offer_item_id"] = $offerItemId;
	}

	public function getOfferItemId()
	{
		return $this->offerItemId;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alibaba.offer.samestyle.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->offerItemId,"offerItemId");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
