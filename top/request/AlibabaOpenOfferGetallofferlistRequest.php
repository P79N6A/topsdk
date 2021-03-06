<?php
/**
 * TOP API: alibaba.open.offer.getallofferlist request
 * 
 * @author auto create
 * @since 1.0, 2016.07.05
 */
class AlibabaOpenOfferGetallofferlistRequest
{
	/** 
	 * 商品发布类目ID
	 **/
	private $categoryId;
	
	/** 
	 * 卖家自定义的商品分类ID，多个之间用“,”分隔
	 **/
	private $groupIds;
	
	/** 
	 * 当前支持:gmtexpire:asc|desc,gmt_modified:asc|desc
	 **/
	private $orderBy;
	
	/** 
	 * 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。
	 **/
	private $page;
	
	/** 
	 * 返回offer列表结果集分页条数。取值范围:大于零的整数;最大值：50。
	 **/
	private $pageSize;
	
	/** 
	 * 自定义返回字段，字段为offerDetailInfo子集。多个字段以半角','分隔。若此字段为空，则返回offer数组信息为空;其中如下参数无法通过该API获得：amountOnSale、details、detailsUrl、saledCount、skuArray、termOfferProcess、tradingType
	 **/
	private $returnFields;
	
	/** 
	 * 地方
	 **/
	private $site;
	
	/** 
	 * 格式:yyyy-MM-dd HH:mm:ss；1、如果传了时间戳参数，则按增量返回，即返回按指定获取条件且对应商品信息的最近更新时间(GMTModified)晚于该时间戳的商品列表信息。2、如果没有传时间戳参数，则取所有的满足条件的商品信息；
	 **/
	private $timeStamp;
	
	/** 
	 * 目前只支持SALE
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function setGroupIds($groupIds)
	{
		$this->groupIds = $groupIds;
		$this->apiParas["group_ids"] = $groupIds;
	}

	public function getGroupIds()
	{
		return $this->groupIds;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
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

	public function setReturnFields($returnFields)
	{
		$this->returnFields = $returnFields;
		$this->apiParas["return_fields"] = $returnFields;
	}

	public function getReturnFields()
	{
		return $this->returnFields;
	}

	public function setSite($site)
	{
		$this->site = $site;
		$this->apiParas["site"] = $site;
	}

	public function getSite()
	{
		return $this->site;
	}

	public function setTimeStamp($timeStamp)
	{
		$this->timeStamp = $timeStamp;
		$this->apiParas["time_stamp"] = $timeStamp;
	}

	public function getTimeStamp()
	{
		return $this->timeStamp;
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
		return "alibaba.open.offer.getallofferlist";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->returnFields,"returnFields");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
