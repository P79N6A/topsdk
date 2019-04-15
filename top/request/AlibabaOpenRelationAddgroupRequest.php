<?php
/**
 * TOP API: alibaba.open.relation.addgroup request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlibabaOpenRelationAddgroupRequest
{
	/** 
	 * 等级名称
	 **/
	private $groupName;
	
	private $apiParas = array();
	
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
		return "alibaba.open.relation.addgroup";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
