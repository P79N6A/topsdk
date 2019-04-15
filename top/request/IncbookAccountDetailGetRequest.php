<?php
/**
 * TOP API: taobao.incbook.account.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2016.02.23
 */
class IncbookAccountDetailGetRequest
{
	/** 
	 * 返回的数据实体中包含的扩展属性 (entPosts：是否包括职位信息； assets：是否包括资产； permissions：是否包括权限信息； departments：是否包括部门信息；)
	 **/
	private $extFileds;
	
	private $apiParas = array();
	
	public function setExtFileds($extFileds)
	{
		$this->extFileds = $extFileds;
		$this->apiParas["ext_fileds"] = $extFileds;
	}

	public function getExtFileds()
	{
		return $this->extFileds;
	}

	public function getApiMethodName()
	{
		return "taobao.incbook.account.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->extFileds,20,"extFileds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
