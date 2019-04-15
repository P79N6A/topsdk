<?php
/**
 * TOP API: taobao.incbook.enterprise.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2016.02.25
 */
class IncbookEnterpriseDetailGetRequest
{
	/** 
	 * 输出信息中包括的扩展信息 (admins：是否包括管理员信息； assets：是否包括资产； aggrInfo：是否包括统计信息；)
	 **/
	private $fileds;
	
	private $apiParas = array();
	
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
		return "taobao.incbook.enterprise.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->fileds,20,"fileds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
