<?php
/**
 * TOP API: alibaba.open.relation.updategroup request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenRelationUpdategroupRequest
{
	/** 
	 * 等级Id
	 **/
	private $groupId;
	
	/** 
	 * 等级名称
	 **/
	private $groupName;
	
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

	public function getApiMethodName()
	{
		return "alibaba.open.relation.updategroup";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
