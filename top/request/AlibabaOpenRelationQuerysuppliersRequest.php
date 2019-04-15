<?php
/**
 * TOP API: alibaba.open.relation.querysuppliers request
 * 
 * @author auto create
 * @since 1.0, 2016.06.28
 */
class AlibabaOpenRelationQuerysuppliersRequest
{
	/** 
	 * 当前页码
	 **/
	private $currentPage;
	
	/** 
	 * 每页多少个
	 **/
	private $pageSize;
	
	/** 
	 * 供应商登录ID
	 **/
	private $supplierLoginId;
	
	private $apiParas = array();
	
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

	public function setSupplierLoginId($supplierLoginId)
	{
		$this->supplierLoginId = $supplierLoginId;
		$this->apiParas["supplier_login_id"] = $supplierLoginId;
	}

	public function getSupplierLoginId()
	{
		return $this->supplierLoginId;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.relation.querysuppliers";
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
