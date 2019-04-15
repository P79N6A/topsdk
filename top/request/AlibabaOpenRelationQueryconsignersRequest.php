<?php
/**
 * TOP API: alibaba.open.relation.queryconsigners request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenRelationQueryconsignersRequest
{
	/** 
	 * 分销商等级
	 **/
	private $consignerGrade;
	
	/** 
	 * 指定分销商LoginId
	 **/
	private $consignerLoginId;
	
	/** 
	 * 当前页码
	 **/
	private $currentPage;
	
	/** 
	 * 每页多少个
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setConsignerGrade($consignerGrade)
	{
		$this->consignerGrade = $consignerGrade;
		$this->apiParas["consigner_grade"] = $consignerGrade;
	}

	public function getConsignerGrade()
	{
		return $this->consignerGrade;
	}

	public function setConsignerLoginId($consignerLoginId)
	{
		$this->consignerLoginId = $consignerLoginId;
		$this->apiParas["consigner_login_id"] = $consignerLoginId;
	}

	public function getConsignerLoginId()
	{
		return $this->consignerLoginId;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function getApiMethodName()
	{
		return "alibaba.open.relation.queryconsigners";
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
