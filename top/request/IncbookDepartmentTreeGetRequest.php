<?php
/**
 * TOP API: taobao.incbook.department.tree.get request
 * 
 * @author auto create
 * @since 1.0, 2016.02.23
 */
class IncbookDepartmentTreeGetRequest
{
	/** 
	 * 是否携带员工信息
	 **/
	private $includeEmployee;
	
	private $apiParas = array();
	
	public function setIncludeEmployee($includeEmployee)
	{
		$this->includeEmployee = $includeEmployee;
		$this->apiParas["include_employee"] = $includeEmployee;
	}

	public function getIncludeEmployee()
	{
		return $this->includeEmployee;
	}

	public function getApiMethodName()
	{
		return "taobao.incbook.department.tree.get";
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
