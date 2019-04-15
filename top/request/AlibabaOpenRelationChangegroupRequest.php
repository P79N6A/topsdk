<?php
/**
 * TOP API: alibaba.open.relation.changegroup request
 * 
 * @author auto create
 * @since 1.0, 2016.06.28
 */
class AlibabaOpenRelationChangegroupRequest
{
	/** 
	 * 等级ID
	 **/
	private $groupId;
	
	/** 
	 * 需要修改的列表
	 **/
	private $loginIdList;
	
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

	public function setLoginIdList($loginIdList)
	{
		$this->loginIdList = $loginIdList;
		$this->apiParas["login_id_list"] = $loginIdList;
	}

	public function getLoginIdList()
	{
		return $this->loginIdList;
	}

	public function getApiMethodName()
	{
		return "alibaba.open.relation.changegroup";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->loginIdList,"loginIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
