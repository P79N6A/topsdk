<?php
/**
 * TOP API: alibaba.open.supplier.listforallconsignment request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenSupplierListforallconsignmentRequest
{
	/** 
	 * 模糊查询关键字
	 **/
	private $keyword;
	
	/** 
	 * 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据
	 **/
	private $pageNo;
	
	/** 
	 * 返回列表结果集每页条数。取值范围:大于零的整数;默认为20条，网页端默认10条
	 **/
	private $pageSize;
	
	/** 
	 * 产品线Id
	 **/
	private $productlineId;
	
	private $apiParas = array();
	
	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
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

	public function setProductlineId($productlineId)
	{
		$this->productlineId = $productlineId;
		$this->apiParas["productline_id"] = $productlineId;
	}

	public function getProductlineId()
	{
		return $this->productlineId;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.supplier.listforallconsignment";
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
