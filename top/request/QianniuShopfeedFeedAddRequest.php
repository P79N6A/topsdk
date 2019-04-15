<?php
/**
 * TOP API: taobao.qianniu.shopfeed.feed.add request
 * 
 * @author auto create
 * @since 1.0, 2016.05.11
 */
class QianniuShopfeedFeedAddRequest
{
	/** 
	 * 动态生效时间
	 **/
	private $activeDate;
	
	/** 
	 * 动态提醒时间
	 **/
	private $alertTime;
	
	/** 
	 * 动态提醒跳转url
	 **/
	private $alertUrl;
	
	/** 
	 * 动态状态：1=草稿，2=编辑完成，3=审核通过，4=已发布，0=审核不通过
	 **/
	private $editStatus;
	
	/** 
	 * 动态内容
	 **/
	private $feedContent;
	
	/** 
	 * 动态类型：上新预告=1、上新=2、活动=3、调查=4、福利=5、爆款=6、无=0
	 **/
	private $feedTag;
	
	/** 
	 * 动态标题
	 **/
	private $feedTitle;
	
	/** 
	 * 动态扩展属性，jsonarray，如动态所关联的商品图片、购买链接等等
	 **/
	private $shopFeedExtInfo;
	
	private $apiParas = array();
	
	public function setActiveDate($activeDate)
	{
		$this->activeDate = $activeDate;
		$this->apiParas["active_date"] = $activeDate;
	}

	public function getActiveDate()
	{
		return $this->activeDate;
	}

	public function setAlertTime($alertTime)
	{
		$this->alertTime = $alertTime;
		$this->apiParas["alert_time"] = $alertTime;
	}

	public function getAlertTime()
	{
		return $this->alertTime;
	}

	public function setAlertUrl($alertUrl)
	{
		$this->alertUrl = $alertUrl;
		$this->apiParas["alert_url"] = $alertUrl;
	}

	public function getAlertUrl()
	{
		return $this->alertUrl;
	}

	public function setEditStatus($editStatus)
	{
		$this->editStatus = $editStatus;
		$this->apiParas["edit_status"] = $editStatus;
	}

	public function getEditStatus()
	{
		return $this->editStatus;
	}

	public function setFeedContent($feedContent)
	{
		$this->feedContent = $feedContent;
		$this->apiParas["feed_content"] = $feedContent;
	}

	public function getFeedContent()
	{
		return $this->feedContent;
	}

	public function setFeedTag($feedTag)
	{
		$this->feedTag = $feedTag;
		$this->apiParas["feed_tag"] = $feedTag;
	}

	public function getFeedTag()
	{
		return $this->feedTag;
	}

	public function setFeedTitle($feedTitle)
	{
		$this->feedTitle = $feedTitle;
		$this->apiParas["feed_title"] = $feedTitle;
	}

	public function getFeedTitle()
	{
		return $this->feedTitle;
	}

	public function setShopFeedExtInfo($shopFeedExtInfo)
	{
		$this->shopFeedExtInfo = $shopFeedExtInfo;
		$this->apiParas["shop_feed_ext_info"] = $shopFeedExtInfo;
	}

	public function getShopFeedExtInfo()
	{
		return $this->shopFeedExtInfo;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.shopfeed.feed.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->editStatus,"editStatus");
		RequestCheckUtil::checkNotNull($this->feedContent,"feedContent");
		RequestCheckUtil::checkNotNull($this->feedTag,"feedTag");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
