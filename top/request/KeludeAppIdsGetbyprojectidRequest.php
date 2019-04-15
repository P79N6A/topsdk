<?php
/**
 * TOP API: taobao.kelude.app.ids.getbyprojectid request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class KeludeAppIdsGetbyprojectidRequest
{
	/** 
	 * 项目ID
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.app.ids.getbyprojectid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}