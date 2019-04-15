<?php
/**
 * TOP API: taobao.rdc.easygo.order.accept request
 * 
 * @author auto create
 * @since 1.0, 2016.04.15
 */
class RdcEasygoOrderAcceptRequest
{
	/** 
	 * 优惠后的价格
	 **/
	private $actualPrice;
	
	/** 
	 * 商品ID
	 **/
	private $auctionId;
	
	/** 
	 * 派单ID
	 **/
	private $dispatchId;
	
	/** 
	 * 商家提供的商品图片地址
	 **/
	private $picUrl;
	
	/** 
	 * 商家提供的权益
	 **/
	private $privilege;
	
	/** 
	 * 推荐理由
	 **/
	private $recReason;
	
	private $apiParas = array();
	
	public function setActualPrice($actualPrice)
	{
		$this->actualPrice = $actualPrice;
		$this->apiParas["actual_price"] = $actualPrice;
	}

	public function getActualPrice()
	{
		return $this->actualPrice;
	}

	public function setAuctionId($auctionId)
	{
		$this->auctionId = $auctionId;
		$this->apiParas["auction_id"] = $auctionId;
	}

	public function getAuctionId()
	{
		return $this->auctionId;
	}

	public function setDispatchId($dispatchId)
	{
		$this->dispatchId = $dispatchId;
		$this->apiParas["dispatch_id"] = $dispatchId;
	}

	public function getDispatchId()
	{
		return $this->dispatchId;
	}

	public function setPicUrl($picUrl)
	{
		$this->picUrl = $picUrl;
		$this->apiParas["pic_url"] = $picUrl;
	}

	public function getPicUrl()
	{
		return $this->picUrl;
	}

	public function setPrivilege($privilege)
	{
		$this->privilege = $privilege;
		$this->apiParas["privilege"] = $privilege;
	}

	public function getPrivilege()
	{
		return $this->privilege;
	}

	public function setRecReason($recReason)
	{
		$this->recReason = $recReason;
		$this->apiParas["rec_reason"] = $recReason;
	}

	public function getRecReason()
	{
		return $this->recReason;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.easygo.order.accept";
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
