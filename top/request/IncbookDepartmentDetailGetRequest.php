<?php
/**
 * TOP API: taobao.incbook.department.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2016.02.23
 */
class IncbookDepartmentDetailGetRequest
{
	/** 
	 * 部门id列表
	 **/
	private $departmentIds;
	
	/** 
	 * 部门实体包含的扩展属性列表 (employees：是否包括员工信息； assets：是否包括资产； childs：是否包括子部门信息； aggrInfo：是否包括统计信息；)
	 **/
	private $fileds;
	
	private $apiParas = array();
	
	public function setDepartmentIds($departmentIds)
	{
		$this->departmentIds = $departmentIds;
		$this->apiParas["department_ids"] = $departmentIds;
	}

	public function getDepartmentIds()
	{
		return $this->departmentIds;
	}

	public function setFileds($fileds)
	{
		$this->fileds = $fileds;
		$this->apiParas["fileds"] = $fileds;
	}

	public function getFileds()
	{
		return $this->fileds;
	}

	public function getApiMethodName()
	{
		return "taobao.incbook.department.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->departmentIds,20,"departmentIds");
		RequestCheckUtil::checkMaxListSize($this->fileds,20,"fileds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
