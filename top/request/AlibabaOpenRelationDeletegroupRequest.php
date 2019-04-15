<?php
/**
 * TOP API: alibaba.open.relation.deletegroup request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenRelationDeletegroupRequest
{
	/** 
	 * 等级Id
	 **/
	private $groupId;
	
	/** 
	 * 等级名称
	 **/
	private $groupName;
	
	/** 
	 * 供应商UserId
	 **/
	private $supplierId;
	
	private $apiParas = array();
	
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function setGroupName($groupName)
	{
		$this->groupName = $groupName;
		$this->apiParas["group_name"] = $groupName;
	}

	public function getGroupName()
	{
		return $this->groupName;
	}

	public function setSupplierId($supplierId)
	{
		$this->supplierId = $supplierId;
		$this->apiParas["supplier_id"] = $supplierId;
	}

	public function getSupplierId()
	{
		return $this->supplierId;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.relation.deletegroup";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkNotNull($this->supplierId,"supplierId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
